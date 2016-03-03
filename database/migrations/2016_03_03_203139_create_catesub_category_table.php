<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatesubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Create Sub Category Table
        Schema::create( 'sub_category', function ( Blueprint $table )
        {

            //Nested Set Fields
            $table->increments( 'id' );
            $table->string( 'sub_category' );

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
        Schema::drop( 'sub_category' );
    }
}
