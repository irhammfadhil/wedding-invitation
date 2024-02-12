<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use SoftDeletes;

    public $table = 'attendance';

    protected $fillable = [
        'invitation_id',
        'number_of_guests',
    ];

    /**
     * Get the invitation associated with the attendance record.
     */
    public function invitation()
    {
        return $this->belongsTo('App\Models\Invitation', 'invitation_id');
    }
}