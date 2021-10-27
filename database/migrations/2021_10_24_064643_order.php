<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('room_id');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->integer('jumlah_hari');
            $table->text('bukti')->nullable();
            $table->enum('status', ['Menunggu', 'Valid', 'Tidak Valid', 'Belum']);
            $table->double('total');
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
        Schema::dropIfExists('order');
    }
}
