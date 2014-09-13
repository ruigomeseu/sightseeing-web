<?php namespace Sightseeing\Controllers;

use Sightseeing\Repositories\Checkin\CheckinRepository;
use View;

class AnalyticsController extends BaseController {

    /**
     * @var CheckinRepository
     */
    private $checkinRepository;

    function __construct(CheckinRepository $checkinRepository)
    {
        $this->checkinRepository = $checkinRepository;
    }

    public function index()
    {
        $checkins = $this->checkinRepository->getAll(['sight']);

        $visitsPerSight = array();
        $visitsPerCountry = array();
        $sightsPerVisitor = array();

        foreach($checkins as $checkin)
        {
            //Visits per Sight
            if( ! array_key_exists($checkin->sight->name, $visitsPerSight))
            {
                $visitsPerSight[$checkin->sight->name] = 0;
            }
            $visitsPerSight[$checkin->sight->name]++;


            //Visits Per Country
            if( ! array_key_exists($checkin->country, $visitsPerCountry))
            {
                $visitsPerCountry[$checkin->country] = 0;
            }

            $visitsPerCountry[$checkin->country]++;


            //Sights Per Visitor
            if ( ! array_key_exists($checkin->mac_address, $sightsPerVisitor))
            {
                $sightsPerVisitor[$checkin->mac_address] = 0;
            }

            $sightsPerVisitor[$checkin->mac_address]++;

        }

        $sightsPerVisitorNormalized = array();
        $sightsPerVisitorNormalized[1] = 0;
        $sightsPerVisitorNormalized[2] = 0;
        $sightsPerVisitorNormalized[3] = 0;
        $sightsPerVisitorNormalized[4] = 0;
        $sightsPerVisitorNormalized[5] = 0;

        foreach($sightsPerVisitor as $sights)
        {
            if($sights >= 5)
            {
                $sightsPerVisitorNormalized[5]++;
            } elseif ($sights >= 4)
            {
                $sightsPerVisitorNormalized[4]++;
            } elseif ($sights >= 3)
            {
                $sightsPerVisitorNormalized[3]++;
            } elseif ($sights >= 2)
            {
                $sightsPerVisitorNormalized[2]++;
            } elseif ($sights >= 1)
            {
                $sightsPerVisitorNormalized[1]++;
            }
        }

        return View::make("analytics.index")
            ->with('title', 'City Analytics')
            ->with('visitsPerSight', $visitsPerSight)
            ->with('visitsPerCountry', $visitsPerCountry)
            ->with('sightsPerVisitor', $sightsPerVisitorNormalized);
    }

} 