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


       // $pos = strpos( $link , $str_to_find );


        //$video_id = substr( $link , $pos + 2 , strlen( $link ) );



        return view( 'home' )->with( 'featured' , $res );

    }


}