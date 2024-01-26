<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use SoftDeletes; // Enable soft deletes for this model.

    public $table = 'invitations';

    protected $fillable = [
        'guest_id',
        'invitation_status',
        'invitation_sent_timestamp',
        'invitation_rsvp_response',
        'invitation_rsvp_timestamp',
        'invitation_num_of_guests',
        'invitation_wishes',
    ];

    protected $dates = ['deleted_at'];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
