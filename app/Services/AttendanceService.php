<?php

namespace App\Services;

use App\Repositories\AttendanceRepository;

class AttendanceService extends Service
{
    public function __construct(AttendanceRepository $repository)
    {
        parent::__construct($repository);
    }
}
