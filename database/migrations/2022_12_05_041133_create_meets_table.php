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
        Schema::create('meets', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            $table->dateTime('me_fecha')->nullable();
            $table->integer('me_dd')->nullable();
            $table->integer('me_ff')->nullable();
            $table->integer('me_fmdm')->nullable();
            $table->integer('me_vvvv')->nullable();
            $table->string('me_dv')->nullable();
            $table->integer('me_1ww')->nullable();
            $table->integer('me_2ww')->nullable();
            $table->integer('me_1www')->nullable();
            $table->integer('me_1ns')->nullable();
            $table->integer('me_1hhh')->nullable();
            $table->string('me_1cbtcu')->nullable();
            $table->integer('me_2ns')->nullable();
            $table->integer('me_2hhh')->nullable();
            $table->string('me_2cbtcu')->nullable();
            $table->integer('me_3ns')->nullable();
            $table->integer('me_3hhh')->nullable();
            $table->string('me_3cbtcu')->nullable();
            $table->integer('me_4ns')->nullable();
            $table->integer('me_4hhh')->nullable();
            $table->float('me_tt')->nullable();
            $table->float('me_td')->nullable();
            $table->float('me_qfe')->nullable();
            $table->integer('me_qnh')->nullable();
            $table->float('me_upghg')->nullable();
            $table->integer('me_pcord')->nullable();
            $table->integer('me_uuu')->nullable();
            $table->string('me_notas')->nullable();

            //* datos auditoria

            $table->integer('ca_usu');
            $table->boolean('ca_tipo');
            $table->boolean('ca_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meets');
    }
};
