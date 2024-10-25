<?php

namespace Database\Samples;

use Illuminate\Support\Collection;
class CategoriesSamples
{
    public function collect(): Collection
    {
        return collect(self::data());
    }

    static function data(): array
    {
        return [
            // ['name' => '', 'track_count' => 0],
            ['name' => 'Hip-Hop', 'track_count' => 0],
            ['name' => 'Rap', 'track_count' => 0],
            ['name' => 'Trap', 'track_count' => 0],
            ['name' => 'R&B', 'track_count' => 0],
            ['name' => 'Soul', 'track_count' => 0],
            ['name' => 'Jazz', 'track_count' => 0],
            ['name' => 'Blues', 'track_count' => 0],
            ['name' => 'Rock', 'track_count' => 0],
            ['name' => 'Metal', 'track_count' => 0],
            ['name' => 'Pop', 'track_count' => 0],
            ['name' => 'Electronic', 'track_count' => 0],
            ['name' => 'House', 'track_count' => 0],
            ['name' => 'Techno', 'track_count' => 0],
            ['name' => 'Dubstep', 'track_count' => 0],
            ['name' => 'Drum & Bass', 'track_count' => 0],
            ['name' => 'Trance', 'track_count' => 0],
            ['name' => 'Hardcore', 'track_count' => 0],
            ['name' => 'Ambient', 'track_count' => 0],
            ['name' => 'Chillout', 'track_count' => 0],
            ['name' => 'Reggae', 'track_count' => 0],
            ['name' => 'Dancehall', 'track_count' => 0],
            ['name' => 'Ska', 'track_count' => 0],
            ['name' => 'Reggaeton', 'track_count' => 0],
            ['name' => 'Afrobeat', 'track_count' => 0],
            ['name' => 'Dance', 'track_count' => 0],
            ['name' => 'Funk', 'track_count' => 0],
            ['name' => 'Disco', 'track_count' => 0],
            ['name' => 'Classical', 'track_count' => 0],
            ['name' => 'Opera', 'track_count' => 0]

        ];
    }
}
