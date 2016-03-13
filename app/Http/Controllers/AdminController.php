<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 07/03/16
 * Time: 10:02
 */

namespace App\Http\Controllers;


use App\Recipe;

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

        if( isset( $_REQUEST[ 'title' ] ) ||
            isset( $_REQUEST[ 'link' ] ) ||
            isset( $_REQUEST[ 'description' ] ) ||
            isset( $_REQUEST[ 'category' ] ) ||
            isset( $_REQUEST[ 'sub_category' ] ) ||
            isset( $_REQUEST[ 'skill_level' ] ) ||
            isset( $_REQUEST[ 'content_type' ] ) ||
            isset( $_REQUEST[ 'feature' ] ) ||
            isset( $_REQUEST[ 'main_feature' ] ) ||
            isset( $_REQUEST[ 'archive' ] )
        )
        {

            $recipe = new Recipe();

            $recipe->title = $_REQUEST[ 'title' ];
            $recipe->link = $_REQUEST[ 'link' ];
            $recipe->description = $_REQUEST[ 'description' ];
            $recipe->category = $_REQUEST[ 'category' ];
            $recipe->sub_category = $_REQUEST[ 'sub_category' ];
            $recipe->skill_level = $_REQUEST[ 'skill_level' ];
            $recipe->content_type = $_REQUEST[ 'content_type' ];
            $recipe->featured = $_REQUEST[ 'feature' ];
            $recipe->main_feature = $_REQUEST[ 'main_feature' ];
            $recipe->archived = $_REQUEST[ 'archive' ];


            $link = $recipe->link;

            parse_str( parse_url( $link, PHP_URL_QUERY ), $my_array_of_vars );


            $recipe->link = $my_array_of_vars['v'];



            $res =  $recipe->save();

            if( $res )
            {
                $msg = 'Record Saved Successfully';
            }
            else
            {
                $msg = 'Failed to Save Record';
            }


            return json_encode( $msg );



        }

    }

}