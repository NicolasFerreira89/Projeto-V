<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('cavalos', function(Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('raca');
            $table->string('funcao');
            $table->string('idade');
            $table->string('pelo');
            $table->string('valor');

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('cavalos');
    }
};
