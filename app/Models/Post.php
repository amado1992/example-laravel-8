<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts"; //nombre de la tabla
    protected $fillable = ['title', 'body'];//campos que son llenados en el formulario
}
