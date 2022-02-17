<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cachorro extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ["raca","cor","peso"];
}
