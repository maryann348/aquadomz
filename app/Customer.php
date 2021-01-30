<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'customer_id',
        'firstname',
        'middlename',
        'lastname',
        'address',
        'contact_number',
        'points'
    ];
}