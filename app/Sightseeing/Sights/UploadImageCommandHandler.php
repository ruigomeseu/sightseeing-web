<?php namespace Sightseeing\Sights; 

use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Aws\S3\S3Client;
use League\Flysystem\Filesystem as Flysystem;
use League\Flysystem\Adapter\AwsS3 as Adapter;

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

    function __construct(Repository $config, Filesystem $filesystem)
    {
        $this->config = $config;
        $this->filesystem = $filesystem;
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

        $filesystem = new Flysystem(new Adapter($client, 'sightseeing.io'));

        $extension = $this->filesystem->extension($command->file['name']);

        $filename = sha1(time().time()).".{$extension}";

        $filesystem->write($filename, $command->file);
    }


} 