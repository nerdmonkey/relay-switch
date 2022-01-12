<?php

namespace Nerdmonkey\RelaySwitch\Models;

use Illuminate\Database\Eloquent\Model;

class Relay extends Model
{
    protected $fillable = ['name', 'pin', 'state'];
}
