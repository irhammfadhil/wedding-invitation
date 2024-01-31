<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use SoftDeletes;
    public $table = 'invitations';

    protected $fillable = [
        'uuid',
        'user_id',
        'name',
        'invitation_type',
        'address',
        'phone',
        'num_of_guests',
        'is_sent',
        'time_invitation_sent',
    ];

    /**
     * Get the user that owns the invitation.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}