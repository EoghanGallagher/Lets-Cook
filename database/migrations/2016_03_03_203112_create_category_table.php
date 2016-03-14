<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Create Category Table
        Schema::create( 'category', function ( Blueprint $table )
        {

            //Nested Set Fields
            $table->increments( 'id' );
            $table->string( 'name' );

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
        //
        Schema::drop( 'category' );
    }
}
