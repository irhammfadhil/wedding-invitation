<?php

namespace App\Repositories;

use App\Models\Rsvp;

class RsvpRepository extends Repository
{
    public function __construct(Rsvp $model)
    {
        parent::__construct($model);
    }
}