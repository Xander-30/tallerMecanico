<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaries extends Model
{
    protected $fillable =['nameproduct','description','price','stock','supplier','phone','direction','state','horario_id','user_id','client_id'];
     
               
    use HasFactory;
}
