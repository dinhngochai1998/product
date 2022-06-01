<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = [
        'number_phone', 'name', 'email', 'note', 'address'
    ];
}
