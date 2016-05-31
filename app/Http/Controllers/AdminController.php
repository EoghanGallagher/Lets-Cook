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
use App\CustomClasses\MetaGenerator;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AdminController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function UploadImages()
    {

    }

    public function AddArticle()
    {
        $msg = '';
        $upload_dir = 'img/';
        $upload_count = 0;
        $failed_upload_count = 0;
        $total_file_count = 0;
        $article = array();



            $recipe = new Recipe();


            $recipe->title =  $this->ValidateInput( $_POST['title'] );


            $recipe->link = $this->ValidateInput( $_POST['link'] );
            $recipe->description = $this->ValidateInput( $_POST['description'] );
            $recipe->ingredients =   $_POST['ingredients'];;



            $recipe->instructions = $this->ValidateInput( $_POST['instructions'] );

            $recipe->region = $this->ValidateInput( $_POST['region'] );
            $recipe->country = $this->ValidateInput( $_POST['country'] );
            $recipe->category =$this->ValidateInput( $_POST['category'] );

            $recipe->skill_level = $this->ValidateInput( $_POST['skill_level'] );
            $recipe->content_type = $this->ValidateInput( $_POST['content_type'] );
            $recipe->author = $this->ValidateInput( $_POST['author'] );





            //Validate Check Box Input

            if( !empty( $_POST[ 'feature' ] ) )
            {

                if(  $this->ValidateInput( $_POST[ 'feature' ] === 'on'  ) )
                {
                    $recipe->featured = 1;
                }
                else
                {
                    $recipe->featured = 0;
                }

            }
            else
            {
                $recipe->featured = 0;
            }

            if( !empty( $_POST[ 'main_feature' ] ) )
            {

                if(  $this->ValidateInput( $_POST[ 'main_feature' ] ) === 'on'  )
                {
                    $recipe->main_feature = 1;
                }
                else
                {
                    $recipe->main_feature = 0;
                }
            }
            else
            {
                $recipe->main_feature = 0;
            }

            if( !empty( $_POST[ 'published' ] ) )
            {
                $recipe->published = $this->ValidateInput( $_POST[ 'published' ] );
            }
            else
            {
                $recipe->published = 0;
            }

            if( !empty( $_POST[ 'how_to_guide' ] ) )
            {


                if(  $this->ValidateInput( $_POST[ 'how_to_guide' ] ) === 'on' )
                {
                    $recipe->how_to_guide = 1;
                }
                else
                {
                    $recipe->how_to_guide = 0;
                }

            }
            else
            {
                $recipe->how_to_guide = 0;
            }


            if( strtolower( $_POST[ 'content_type' ] ) == 'text' )
            {

                if ( isset( $_FILES ) )
                {

                    foreach ( $_FILES as $eachFile )
                    {

                        $total_file_count ++;
                        //Get file Extension

                        $ext = strtolower( pathinfo( $eachFile['name'], PATHINFO_EXTENSION ) );


                        //check size of file size
                        if ($eachFile['size'] > 74000)
                        {

                            echo 'File to Big';

                        }
                        elseif ( ($ext == 'jpg') || ($ext == 'png') )
                        {

                            if( move_uploaded_file( $eachFile['tmp_name'], $upload_dir .basename( $eachFile['name'] ) ) )
                            {

                                $upload_count ++;

                                echo  'UC ' . $upload_count;

                            }

                        }
                        else
                        {
                            $failed_upload_count++;
                            echo $failed_upload_count;
                        }

                    }

                }

            }
            else
            {

                $link = $recipe->link;
                parse_str( parse_url( $link, PHP_URL_QUERY ), $recipe_link );


                if( $recipe_link )
                {

                    $recipe->link = $recipe_link['v'];
                }

            }

            $meta_content = $recipe->title . ' ' . $recipe->description . ' ' . $recipe->ingredients . ' ' . $recipe->instructions;



            $metaGenerator = new MetaGenerator();
            $meta_keywords = $metaGenerator->ExtractKeyWords( $meta_content );

            $recipe->meta = implode( ',',  $meta_keywords );




            $res = $recipe->save();

            if ( $res )
            {
                $msg = 'Record Saved Successfully';
            }
            else
            {
                $msg = 'Failed to Save Record';
            }


            return json_encode( $msg );





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



    public function ValidateInput( $data )
    {
        $data = trim($data);
        $data = stripslashes($data);
        //$data = htmlspecialchars($data);

        return $data;
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

                [ 'name' => 'American' ],
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

            [ 'name' => 'Appetizers and Snacks' ],
            [ 'name' => 'BBQ and Grilling' ],
            [ 'name' => 'Bread Recipes' ],
            [ 'name' => 'Breakfast and Brunch' ],
            [ 'name' => 'Desserts' ],
            [ 'name' => 'Dinner Recipes' ],
            [ 'name' => 'Drinks' ],
            [ 'name' => 'Everyday Cooking' ],
            [ 'name' => 'Free From Recipes' ],
            [ 'name' => 'Fruits and Vegtables' ],
            [ 'name' => 'Healthy Recipes' ],
            [ 'name' => 'Holidays and Events' ],
            [ 'name' => 'Ingredients' ],
            [ 'name' => 'Lunch Recipes' ],
            [ 'name' => 'Main Dishes' ],
            [ 'name' => 'Meat and Poulty' ],
            [ 'name' => 'Pasta and Noodles' ],
            [ 'name' => 'Salad Recipes' ],
            [ 'name' => 'Seafood Recipes' ],
            [ 'name' => 'Side Dishes' ],
            [ 'name' => 'Soups' ],
            [ 'name' => 'Stew' ],
            [ 'name' => 'Chili' ],
            [ 'name' => 'Trusted Brands' ],
            [ 'name' => 'U.S. Recipes' ],
            [ 'name' => 'World Cuisine' ]


        ];


        DB::table( 'region' )->truncate();

        DB::table('region')->insert( $regions );


        DB::table( 'countries' )->truncate();

        DB::table('countries')->insert( $countries );


        DB::table( 'category' )->truncate();

        DB::table( 'category' )->insert( $categories );

        return 'Tables Populated ...';


    }


    public function Test()
    {

        $metaGenerator = new MetaGenerator();

    }


}