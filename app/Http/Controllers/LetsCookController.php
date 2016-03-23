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

        $res = Recipe::where( 'featured', '=', 1 )->paginate( 9 );

        return view( 'home' )->with( 'featured' , $res );

    }


    public function Recipe( $title , $id , $link )
    {
        return view( 'recipe' )->with( 'video_id' , $link )
            ->with( 'title' , $title  )
            ->with( 'id' , $id  );

    }

    public function Recipes( $id )
    {

        return view( 'recipes' );

    }

    public function Report( $id )
    {

        $recipe = Recipe::find( 1 );

        $recipe->broken_link = true;

        $recipe->save();

    }


}