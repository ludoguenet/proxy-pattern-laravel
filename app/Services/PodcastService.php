<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\PodcastServiceContract;
use Illuminate\Support\Facades\Http;

class PodcastService implements PodcastServiceContract
{
    private string $url = 'https://itunes.apple.com/search?term=podcast';

    public function getPodcasts(): array
    {
        $response = Http::get($this->url);

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }
}