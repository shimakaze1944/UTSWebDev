<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beans', function (Blueprint $table) {
            $table->id();
            $table->string('bean_name');
            $table->string('origin');
            $table->enum('bean_type',['0','1'])
                ->default('0')
                ->comment('0= Robusta, 1= Arabica');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beans');
    }
}
