<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operator', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('usia')->nullable();
            $table->string('email')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('tgl_masuk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operator');
    }
}
