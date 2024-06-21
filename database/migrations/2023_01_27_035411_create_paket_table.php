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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id');
            $table->foreign('outlet_id')->references('id')->on('outlets')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->enum('jenis',['kiloan','selimut','bed_cover','kaos','dll']);
            $table->string('nama_paket',100);
            $table->integer('harga');
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
        Schema::dropIfExists('paket');
    }
};
