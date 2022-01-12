<?php

namespace Nerdmonkey\RelaySwitch\Models;

use Illuminate\Database\Eloquent\Model;


class Switch extends Model
{
    protected $fillable = ['name', 'pin', 'state'];
}
