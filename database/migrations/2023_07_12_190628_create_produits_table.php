<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('ident')->length(25);
            $table->string('name')->length(100);
            $table->float('eau', 8, 3);              // g/l
            $table->float('glucides', 8, 3);         // g
            $table->float('fibres', 8, 3);           // g
            $table->float('lipides', 8, 3);          // g
            $table->float('proteines', 8, 3);        // g
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
        Schema::dropIfExists('produits');
    }
}
