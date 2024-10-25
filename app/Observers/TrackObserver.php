<?php

namespace App\Observers;

use App\Models\Categories;
use App\Models\Track;

class TrackObserver
{
    public function created(Track $track)
    {
        $category = Categories::find($track->categorie);
        if ($category) {
            $category->increment('tracks_count');
        }
    }

    public function deleted(Track $track)
    {
        $category = Categories::find($track->categorie);
        if ($category) {
            $category->decrement('tracks_count');
        }
    }
}
