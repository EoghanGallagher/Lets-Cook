<?php

/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 14/03/16
 * Time: 17:24
 */

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('region')->delete();


        $regions = [

            [ 'name' => 'Africa & Middle East' ],
            [ 'name' => 'Asia & Pacific Ocean' ],
            [ 'name' => 'Europe' ],
            [ 'name' => 'North & South America' ],
            [ 'name' => 'Other']

        ];


        foreach( $regions as $region )
        {

            Region::create( $region );


        }





    }

}