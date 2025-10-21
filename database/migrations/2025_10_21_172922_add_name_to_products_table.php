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
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('qty');
        $table->decimal('price', 8, 2);
        $table->text('description')->nullable();
        $table->timestamps();
            //
        });
    }
};
