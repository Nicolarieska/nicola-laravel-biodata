<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNicolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nicolas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('namalengkap');
            $table->string('ttl');
            $table->string('jk');
            $table->string('goldar');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('tk');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('kuliah');
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
        Schema::dropIfExists('nicolas');
    }
}
