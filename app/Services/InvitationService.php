<?php

namespace App\Services;

use App\Repositories\InvitationRepository;

class InvitationService extends Service
{
    public function __construct(InvitationRepository $repository)
    {
        parent::__construct($repository);
    }
}
