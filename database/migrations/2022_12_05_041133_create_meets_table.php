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

           $table->string('oaci')->nullable();
           $table->date('fecha')->nullable();
           $table->time('gg')->nullable();
           $table->integer('dd')->nullable();
           $table->integer('ff')->nullable();
           $table->integer('fmfm')->nullable();
           $table->integer('vVariable_i')->nullable();
           $table->integer('vVariable_f')->nullable();
           $table->integer('vvvv')->nullable();
           $table->string('dv')->nullable();
           $table->integer('ww')->nullable();
           $table->integer('ww1')->nullable();
           $table->integer('www')->nullable();
           $table->integer('ns1')->nullable();
           $table->integer('hhh1')->nullable();
           $table->string('cbtcu1')->nullable();
           $table->integer('ns2')->nullable();
           $table->integer('hhh2')->nullable();
           $table->string('cbtcu2')->nullable();
           $table->integer('ns3')->nullable();
           $table->integer('hhh3')->nullable();
           $table->string('cbtcu3')->nullable();
           $table->integer('ns4')->nullable();
           $table->integer('hhh4')->nullable();
           $table->float('tt')->nullable();
           $table->float('td')->nullable();
           $table->float('qfe')->nullable();
           $table->integer('qnh')->nullable();
           $table->float('pulghg')->nullable();
           $table->integer('pcord')->nullable();
           $table->integer('uuu')->nullable();
           $table->string('notas')->nullable();

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
