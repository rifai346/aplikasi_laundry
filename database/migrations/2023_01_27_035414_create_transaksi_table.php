<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('outlet_id')->unique()->required();
            $table->string('kode_invoice',100)->required();
            $table->integer('member_id')->unique()->required();
            $table->date('tgl')->required();
            $table->date('batas_waktu')->required();
            $table->date('tgl_bayar')->required();
            $table->integer('biaya_tambahan')->required();
            $table->double('diskon')->required();
            $table->integer('pajak')->required();
            $table->string('status', 30)->required();
            $table->enum('dibayar', ['dibayar', 'belum_dibayar'])->required();
            $table->integer('user_id')->unique()->required();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
