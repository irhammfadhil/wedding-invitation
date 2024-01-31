<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rsvp extends Model
{
    use SoftDeletes;
    public $table = 'rsvps';

    protected $fillable = [
        'invitation_id',
        'response',
        'num_of_guests',
        'wishes',
    ];

    /**
     * Get the invitation associated with the RSVP.
     */
    public function invitation()
    {
        return $this->belongsTo('App\Models\Invitation', 'invitation_id');
    }
}
