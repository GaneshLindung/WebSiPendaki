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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('gambarUtama');
            $table->string('nama', 25);
            $table->string('slug', 25)->unique();
            $table->text('detail');
            $table->string('status', 12);
            $table->text('rute');
            $table->text('linkrute');
            $table->text('pdfrute');
            $table->ipAddress('harga');
            $table->text('infodetail');
            $table->text('spotfoto1');
            $table->text('spotfoto2');
            $table->text('spotfoto3');
            $table->ipAddress('contactBasecamp');
            $table->ipAddress('contactPorter');
            $table->ipAddress('contactTourGuide');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
