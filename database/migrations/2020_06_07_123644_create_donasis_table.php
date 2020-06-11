<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->string('no_bukti');
            $table->date('tgl_donasi');
            $table->string('nama_amil');
            $table->text('alamat');
            $table->string('nama_donatur');
            $table->decimal('debet', 15, 2);
            $table->decimal('kredit', 15, 2);
            $table->text('keterangan');
            $table->text('rincian_roa');
            $table->decimal('saldo', 15, 2);
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
        Schema::dropIfExists('donasis');
    }
}
