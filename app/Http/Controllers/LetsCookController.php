<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 11/03/16
 * Time: 10:03
 */

namespace App\Http\Controllers;

use App\Categories;
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
            ->where( 'how_to_guide', '!=' , 1  )
            ->orderBy( 'created_at' , 'desc' )
            ->take( 6 )
            ->get();



        $tuts = Recipe::where( 'how_to_guide' , '=' , 1 )
            ->orderBy( 'created_at' , 'desc' )
            ->take( 6 )
            ->get();


        $desserts = Recipe::where( 'category' , '=',  5  )
            ->orderBy( 'title' )
            ->take( 6 )
            ->get();



        return view( 'home' )->with( 'featured' , $featured )
            ->with( 'tutorials' , $tuts )
            ->with( 'desserts' , $desserts );

    }


    public function Recipe( $id , $title  )
    {

        $res = Recipe::where( 'id' , $id )->get();

        return view( 'recipe' )
            ->with( 'title' , str_replace( '-' , ' ', $title )  )
            ->with( 'id' , $id  )
            ->with( 'res' , $res );

    }

    public function Recipes( $id )
    {

        $pagination = 21;

        $title = $id;

        if( $id == 'all' )
        {
            $res = Recipe::where( 'published', '=' , 1 )
                ->where( 'How_To_Guide', '!=', 1 )
                ->paginate( $pagination );

            $title = 'Lots of Recipes';
        }
        else if( $id == 'How-To-Guide' )
        {
            $res = Recipe::where( 'How_To_Guide', '=', 1 )
                ->orderBy( 'created_at' ,'desc' )
                ->paginate( $pagination );

            $title = 'Learn how to cook';

        }
        else
        {
            $res = Recipe::where( 'category', '=', $id )->paginate( $pagination );

            $title = Categories::select( 'name' )
                ->where( 'id' , '=' , $id )
                ->get();

            $title = $title[0]->name;


        }

        return view( 'recipes' )->with( 'recipes' , $res )
            ->with( 'title' , $title );

    }

    public function Report( $id )
    {

        $recipe = Recipe::find( $id );

        $recipe->broken_link = 1;

        $recipe->save();

    }


    public function Search( $search )
    {

        $search_title = ' found for ' . $search;

        //$res = Recipe::search( $search )->get();

        $res = Recipe::search(  $search , [ 'title' => 20, 'ingredients' => 10 , 'author' => 5 ], true )->orderBy( 'title' )->paginate( 12 );

        $search_count = count( $res );

        if( $search_count > 1 )
        {
            $result =  ' results ';
        }
        else
        {
            $result = ' result ';
        }

        $search_title = $search_count . $result . $search_title;

        return view( 'recipes' )->with( 'recipes' , $res )
                                ->with( 'title' , $search_title );

    }


}