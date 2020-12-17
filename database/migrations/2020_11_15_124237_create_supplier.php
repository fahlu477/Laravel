<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_supplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',255);
            $table->test('alamat');
            $table->string('no_telp',20);
            $table->timestamp();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_supplier', function (Blueprint $table) {
            //
        });
    }
}
