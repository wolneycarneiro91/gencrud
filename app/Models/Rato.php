<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rato extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ["raca","peso"];
}
