<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PodcastServiceContract;

class PodcastController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PodcastServiceContract $service)
    {
        return $service->getPodcasts();
    }
}
