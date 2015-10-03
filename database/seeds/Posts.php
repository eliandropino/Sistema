<?php

use Illuminate\Database\Seeder;
use App\Post;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();//limpa a tabela POSt
        factory('App\Post',15)->create();//chama a factory e cria 15 registros
    }
}
