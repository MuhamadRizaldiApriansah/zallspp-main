<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');

            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->date('tanggal_bayar');
            $table->string('bulan_bayar', 25);
            $table->string('tahun_bayar', 4);

            $table->unsignedBigInteger('id_spp');
            $table->foreign('id_spp')->references('id')->on('spp')->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->integer('jumlah_bayar');


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
        Schema::dropIfExists('pembayarans');
    }
};
