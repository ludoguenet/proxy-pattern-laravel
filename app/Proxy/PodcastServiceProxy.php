<?php

declare(strict_types=1);

namespace App\Proxy;

use Illuminate\Support\Facades\Cache;
use App\Contracts\PodcastServiceContract;

class PodcastServiceProxy implements PodcastServiceContract
{
    public function __construct(private readonly PodcastServiceContract $service){}

    public function getPodcasts(): array
    {
        abort_if(auth()->guest(), 403);

        return Cache::remember('podcasts.list', 3600, fn () => $this->service->getPodcasts());
    }
}