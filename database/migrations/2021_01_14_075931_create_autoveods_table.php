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
            $table->string('algus');
            $table->string('otspunkt');
            $table->string('aeg'); // Soovitav Aeg
            $table->integer('nr'); // Auto Number
            $table->string('juht');
            $table->string('valmis');
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
