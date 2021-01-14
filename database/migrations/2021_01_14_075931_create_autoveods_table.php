<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoveodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autoveods', function (Blueprint $table) {
            $table->id();
            $table->string('algus', 50);
            $table->string('otspunkt', 50);
            $table->string('aeg', 50); // Soovitav Aeg
            $table->integer('nr')->default(-1); // Auto Number
            $table->string('juht', 50);
            $table->boolean('valmis');
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
        Schema::dropIfExists('autoveods');
    }
}
