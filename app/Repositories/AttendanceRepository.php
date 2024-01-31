<?php

namespace App\Repositories;

use App\Models\Attendance;

class AttendanceRepository extends Repository
{
    public function __construct(Attendance $model)
    {
        parent::__construct($model);
    }
}