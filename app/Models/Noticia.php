<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    
    //declarar las variables de instancia
    protected $table = 'noticia';
    
    //nombre del campo que forma la primary key ->id autonumerico
    //protected $primaryKey = 'idNoticia';
    
    protected $fillable = ['titulo', 'texto', 'imagen', 'autor', 'fecha'];
}
