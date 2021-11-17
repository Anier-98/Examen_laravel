<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pedidos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('producto', 16)->unique();
            $table->string('unidad', 50);

            $table->timestamps();
        });
    }

    /
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}