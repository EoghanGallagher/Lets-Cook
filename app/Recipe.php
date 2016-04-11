<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 07/03/16
 * Time: 14:41
 */

namespace App;


use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;



class Recipe extends Model
{


    use Eloquence;


    protected $searchableColumns = ['title', 'ingredients'];

    protected $table = 'recipes';




}