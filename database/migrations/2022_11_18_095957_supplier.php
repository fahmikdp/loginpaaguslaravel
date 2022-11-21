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
        //
        Schema::create('supplier', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->increments('id');
            $table->string('nama_supplier', 255);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->text('alamat_supplier')->nullable();
            $table->string('telp_supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('supplier');
    }
};
