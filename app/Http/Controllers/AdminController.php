<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 07/03/16
 * Time: 10:02
 */

namespace App\Http\Controllers;


use DB;

use App\Recipe;
use App\Region;
use App\Countries;
use App\Categories;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AdminController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function AddArticle()
    {
        $msg = '';

        $article = array();

        if (isset($_REQUEST['title']) ||
            isset($_REQUEST['link']) ||
            isset($_REQUEST['description']) ||
            isset($_REQUEST['category']) ||
            isset($_REQUEST['sub_category']) ||
            isset($_REQUEST['skill_level']) ||
            isset($_REQUEST['content_type']) ||
            isset($_REQUEST['feature']) ||
            isset($_REQUEST['main_feature']) ||
            isset($_REQUEST['archive'])
        ) {

            $recipe = new Recipe();

            $recipe->title = $_REQUEST['title'];
            $recipe->link = $_REQUEST['link'];
            $recipe->description = $_REQUEST['description'];
            $recipe->category = $_REQUEST['category'];
            $recipe->sub_category = $_REQUEST['sub_category'];
            $recipe->skill_level = $_REQUEST['skill_level'];
            $recipe->content_type = $_REQUEST['content_type'];
            $recipe->featured = $_REQUEST['feature'];
            $recipe->main_feature = $_REQUEST['main_feature'];
            $recipe->archived = $_REQUEST['archive'];


            $link = $recipe->link;

            parse_str(parse_url($link, PHP_URL_QUERY), $my_array_of_vars);


            $recipe->link = $my_array_of_vars['v'];


            $res = $recipe->save();

            if ($res) {
                $msg = 'Record Saved Successfully';
            } else {
                $msg = 'Failed to Save Record';
            }


            return json_encode($msg);


        }
    }


    public function LoadAdmin()
    {


        $regions  = Region::all();

        $countries = Countries::all();

        $categories = Categories::all();


        return view( 'admin' )->with( 'region' , $regions )
                              ->with( 'countries' , $countries )
                              ->with( 'categories' , $categories );

    }


    public function PopulateTables()
    {

        $regions = [

            ['name' => 'Africa & Middle East'],
            ['name' => 'Asia & Pacific Ocean'],
            ['name' => 'Europe'],
            ['name' => 'North & South America'],
            ['name' => 'Other']

        ];




        $countries = [

                [ 'name' => 'Argentinian' ],
                [ 'name' => 'Armenian ' ],
                [ 'name' => 'Australian' ],
                [ 'name' => 'Austrian' ],

                [ 'name' => 'Basque' ],
                [ 'name' => 'Belgian' ],
                [ 'name' => 'Brazillian' ],
                [ 'name' => 'British' ],
                [ 'name' => 'Burmese' ],

                [ 'name' => 'Cajun' ],
                [ 'name' => 'Canadian' ],
                [ 'name' => 'Caribbean' ],
                [ 'name' => 'Chinese' ],
                [ 'name' => 'Colombian' ],
                [ 'name' => 'Croatian' ],
                [ 'name' => 'Czech' ],

                [ 'name' => 'Danish' ],
                [ 'name' => 'Dutch' ],

                [ 'name' => 'Egyption' ],
                [ 'name' => 'Eskimo' ],
                [ 'name' => 'Ethiopian' ],

                [ 'name' => 'Filipino' ],
                [ 'name' => 'Finnish' ],
                [ 'name' => 'French' ],

                [ 'name' => 'German' ],
                [ 'name' => 'Greek' ],

                [ 'name' => 'Hawaiian' ],
                [ 'name' => 'Hungarian' ],

                [ 'name' => 'Icelandic' ],
                [ 'name' => 'Indian & Pakistani' ],
                [ 'name' => 'Indonesia' ],
                [ 'name' => 'Irish' ],
                [ 'name' => 'Italian' ],

                [ 'name' => 'Japanese' ],
                [ 'name' => 'Jewish' ],

                [ 'name' => 'Korean' ],

                [ 'name' => 'Lebanese' ],

                [ 'name' => 'Mexican' ],
                [ 'name' => 'Morrocan' ],

                [ 'name' => 'Native American' ],
                [ 'name' => 'New Zealand' ],

                [ 'name' => 'Other African' ],
                [ 'name' => 'Other Middle Eastern' ],

                [ 'name' => 'Persian' ],
                [ 'name' => 'Peruvian' ],
                [ 'name' => 'Polish' ],
                [ 'name' => 'Portuguese' ],

                [ 'name' => 'Romanian' ],
                [ 'name' => 'Russian' ],

                [ 'name' => 'Scandinavian' ],
                [ 'name' => 'Scottish' ],
                [ 'name' => 'Serbian' ],
                [ 'name' => 'Singaporean' ],
                [ 'name' => 'Spanish' ],
                [ 'name' => 'Swedish' ],
                [ 'name' => 'Swiss' ],

                [ 'name' => 'Tahitian' ],
                [ 'name' => 'Thai' ],
                [ 'name' => 'Tibetan' ],
                [ 'name' => 'Turkish' ],

                [ 'name' => 'Ukranian' ],

                [ 'name' => 'Venezuelan' ],
                [ 'name' => 'Viernamese' ],

                [ 'name' => 'Welsh' ]


        ];


        $categories = [

            [ 'name' => 'Appetizers' ],
            [ 'name' => 'Baked Goods' ],
            [ 'name' => 'Beverages' ],
            [ 'name' => 'Confectionary' ],
            [ 'name' => 'Desserts' ],
            [ 'name' => 'Dips & Spreads' ],
            [ 'name' => 'Fish & Seafood' ],
            [ 'name' => 'Fruits' ],
            [ 'name' => 'Grains' ],
            [ 'name' => 'Main Dishes' ],
            [ 'name' => 'Sides Dishes' ],
            [ 'name' => 'Seasonal Dishes' ],
            [ 'name' => 'Snacks' ],
            [ 'name' => 'Soups' ],
            [ 'name' => 'Vegetarian' ],
            [ 'name' => 'Vegan' ]

        ];


        DB::table( 'region' )->truncate();

        DB::table('region')->insert( $regions );


        DB::table( 'countries' )->truncate();

        DB::table('countries')->insert( $countries );


        DB::table( 'category' )->truncate();

        DB::table( 'category' )->insert( $categories );

        return 'Tables Populated ...';


    }


}