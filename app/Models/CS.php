<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CS extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ["gun","agent"];
}
