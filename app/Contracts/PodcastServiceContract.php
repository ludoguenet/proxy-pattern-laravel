<?php

declare(strict_types=1);

namespace App\Contracts;

interface PodcastServiceContract
{
    public function getPodcasts(): array;
}