<?php

namespace App\Services;

use App\Repositories\RsvpRepository;

class RsvpService extends Service
{
    public function __construct(RsvpRepository $repository)
    {
        parent::__construct($repository);
    }
}
