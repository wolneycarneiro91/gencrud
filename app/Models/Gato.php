<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ["raca","cor","peso"];
}
