<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishuts', function (Blueprint $table) {
            $table->bigIncrements('id_dishut');
            $table->string('nama',70);
            $table->string('nip',27);
            $table->char('anggota',6);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->char('golongan',6);
            $table->string('jabatan',30);
            $table->char('eselon',6)->nullable();
            $table->string('nama_jabatan',100);
            $table->integer('kelas_jabatan');
            $table->string('unit_kerja',150);
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
        Schema::dropIfExists('dishuts');
    }
}
