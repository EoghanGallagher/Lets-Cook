<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create Recipes Table
        Schema::create( 'recipes', function ( Blueprint $table )
        {

            //Nested Set Fields
            $table->increments( 'id' );
            $table->string( 'title' );
            $table->string( 'link' );
            $table->string( 'thumbnail' );
            $table->integer( 'region' );
            $table->integer( 'country' );
            $table->integer( 'category' );
            $table->integer( 'sub_category' );
            $table->string( 'skill_level' );
            $table->boolean( 'featured' );
            $table->boolean( 'main_feature' );
            $table->boolean( 'published' );
            $table->string( 'description' , 3000 );
            $table->string( 'ingredients' , 3000 );
            $table->string( 'instructions', 3000 );
            $table->string( 'content_type' );
            $table->boolean( 'broken_link' );
            $table->boolean( 'how_to_guide' );

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
