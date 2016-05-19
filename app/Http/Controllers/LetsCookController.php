<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 11/03/16
 * Time: 10:03
 */

namespace App\Http\Controllers;


use App\Recipe;
use Faker\Provider\Base;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LetsCookController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {

        $str_to_find = 'v=';

        $featured = Recipe::where( 'featured', '=', 1 )
            ->orderBy( 'title' )
            ->take( 6 )
            ->get();



        $tuts = Recipe::where( 'how_to_guide' , '=' , 1 )
            ->orderBy( 'title' )
            ->take( 21 )
            ->get();


        $desserts = Recipe::where( 'category' , '=',  5  )
            ->orderBy( 'title' )
            ->take( 21 )
            ->get();



        return view( 'home' )->with( 'featured' , $featured )
            ->with( 'tutorials' , $tuts )
            ->with( 'desserts' , $desserts );

    }


    public function Recipe( $id , $title , $link )
    {


        $res = Recipe::where( 'id' , $id )->get();


        return view( 'recipe' )->with( 'video_id' , $link )
            ->with( 'title' , str_replace( '-' , ' ', $title )  )
            ->with( 'id' , $id  )
            ->with( 'res' , $res );

    }

    public function Recipes( $id )
    {

        $pagination = 21;

        if( $id == 'all' )
        {

            $res = Recipe::where( 'published', '=' , 1 )->paginate( $pagination );

        }
        else if( $id == 'How-To-Guide' )
        {
            $res = Recipe::where( 'How_To_Guide', '=', 1 )->paginate( $pagination );
        }
        else
        {
            $res = Recipe::where( 'category', '=', $id )->paginate( $pagination );
        }

        return view( 'recipes' )->with( 'recipes' , $res );

    }

    public function Report( $id )
    {

        $recipe = Recipe::find( 1 );

        $recipe->broken_link = true;

        $recipe->save();

    }


    public function Search( $search )
    {

        //$res = Recipe::search( $search )->get();

        $res = Recipe::search(  $search , [ 'title' => 20, 'ingredients' => 10 , 'author' => 5 ], true )->orderBy( 'title' )->paginate( 12 );

        return view( 'recipes' )->with( 'recipes' , $res );

    }


}