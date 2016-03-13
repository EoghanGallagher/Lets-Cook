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

        $res = Recipe::where( 'featured', '=', 1 )->get();

        return view( 'home' )->with( 'featured' , $res );

    }


    public function Recipe( $title , $id )
    {
        return view( 'recipe' )->with( 'video_id' , $id )
            ->with( 'title' , $title  );
    }


}