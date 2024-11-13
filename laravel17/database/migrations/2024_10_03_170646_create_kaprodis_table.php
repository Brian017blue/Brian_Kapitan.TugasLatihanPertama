<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaprodisTable extends Migration
{
    public function up()
    {
        Schema::create('kaprodis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('kode_dosen');
            $table->string('nip');
            $table->string('name');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('kaprodis');
    }
}
