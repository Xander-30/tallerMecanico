<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = ['identification_card','name','last_name','id_genders','phone','direction','email'];
               
     public function genero()
    {
        //relacion uno a uno de la tabla gender con la tabla clients
        return $this->belongsTo(Genders::class,'id_genders');
    }



}

