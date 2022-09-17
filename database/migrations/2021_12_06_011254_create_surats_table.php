<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('jenis_id')->constrained()->onDelete('cascade');
            $table->string('judul')->nullable();
            $table->string('tgl_pelaksanaan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('mitra')->nullable();
            $table->string('alamat_mitra')->nullable();
            $table->text('keterangan');
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
        Schema::dropIfExists('surats');
    }
}
