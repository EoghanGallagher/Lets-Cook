<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Create Images Table
        Schema::create( 'images', function ( Blueprint $table )
        {

            $table->increments( 'id' );
            $table->string( 'title' );
            $table->string( 'link' );
            $table->integer( 'recipe_id' );

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
        Schema::drop( 'recipes' );
    }
}
