<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use App\Models\DescritorAlfa;

class DescritorAlfa extends Model
{
    
    protected $guarded = ['id'];
    protected $fillable = ['descricao','numero_alfa'];

}
