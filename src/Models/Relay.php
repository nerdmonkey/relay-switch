<?php

namespace Nerdmonkey\RelaySwitch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relay extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pin', 'state'];
}
