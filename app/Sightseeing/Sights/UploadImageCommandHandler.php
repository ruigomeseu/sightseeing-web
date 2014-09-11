<?php namespace Sightseeing\Sights; 

use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Aws\S3\S3Client;
use League\Flysystem\Filesystem as Flysystem;
use League\Flysystem\Adapter\AwsS3 as Adapter;
use Sightseeing\Repositories\Sight\SightRepository;

class UploadImageCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var Repository
     */
    private $config;

    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var SightRepository
     */
    private $sightRepository;

    function __construct(Filesystem $filesystem, Repository $config, SightRepository $sightRepository)
    {
        $this->filesystem = $filesystem;
        $this->config = $config;
        $this->sightRepository = $sightRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $client = S3Client::factory(array(
            'key'    => $this->config->get('services.s3.key'),
            'secret' => $this->config->get('services.s3.secret'),
        ));

        /*
         * Upload image to S3
         */
        $filesystem = new Flysystem(new Adapter($client, $this->config->get('sightseeing.s3-bucket')));

        $extension = $this->filesystem->extension($command->image->getClientOriginalName());

        $filename = sha1(time().time()).".{$extension}";

        $filesystem->write($filename, file_get_contents($command->image), ['visibility' => 'public']);

        /*
         * Create record on the database
         */

        $this->sightRepository->addImageById($command->id, $filename);
    }


} 