<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ["cnpj","razao_social","capital_social"];
}
