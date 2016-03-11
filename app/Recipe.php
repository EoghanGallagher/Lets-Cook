<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 07/03/16
 * Time: 14:41
 */

namespace App;



use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{


    protected $table = 'recipes';


    public $test = 'hello';




    public function getTest()
    {
        return 'Test';
    }


}