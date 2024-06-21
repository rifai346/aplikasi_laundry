<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_id');
            $table->foreign('transaksi_id')->references('id')->on('transaksis')
            ->OnUpdate('cascade')
            ->OnDelete('cascade');
            $table->unsignedBigInteger('paket_id');
            $table->foreign('paket_id')->references('id')->on('pakets')
            ->OnUpdate('cascade')
            ->OnDelete('cascade');
            $table->decimal('qty',5,2);
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
