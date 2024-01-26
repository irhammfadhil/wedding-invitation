<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use SoftDeletes; // Enable soft deletes for this model.

    public $table = 'guests';

    protected $fillable = ['name', 'email', 'phone_number'];
    protected $dates = ['deleted_at'];
}