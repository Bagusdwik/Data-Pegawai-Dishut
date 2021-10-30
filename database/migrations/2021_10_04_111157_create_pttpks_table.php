<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePttpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pttpks', function (Blueprint $table) {
            $table->bigIncrements('id_pttpk');
            $table->string('nama',60);
            $table->string('nipttpk',25);
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('tempat',15);
            $table->date('tanggallahir');
            $table->char('pendidikan',9);
            $table->string('jurusan',25)->nullable();
            $table->string('jabatan',70);
            $table->string('upt',40);
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('pttpks');
    }
}
