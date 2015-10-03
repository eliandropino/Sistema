<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillabre permite que o model POST grave conteudo em massa quando recebido
    protected $fillable = ['title','content'];
}