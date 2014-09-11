<?php namespace Sightseeing\Presenters;

use Laracasts\Presenter\Presenter;

class BeaconPresenter extends Presenter {

    public function dateWithDiff()
    {
        if( ! $this->installed_at)
        {
            return "N/A";
        }

        return $this->installed_at->diffForHumans() . " (" . $this->installed_at->format("m/d/Y") . ")";
    }

    public function date()
    {
        if( ! $this->installed_at)
        {
            return null;
        }

        return $this->installed_at->format("m/d/Y");
    }

}