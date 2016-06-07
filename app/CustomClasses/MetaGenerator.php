<?php
/**
 * Created by PhpStorm.
 * User: Wormwood
 * Date: 30/05/16
 * Time: 18:27
 */

namespace App\CustomClasses;


class MetaGenerator
{

    function __Construct()
    {



    }


    public function ExtractKeyWords( $string )
    {
        mb_internal_encoding('UTF-8');
        $stopWords = array(
            'the', 'how',
            'with','tsp',
            'and', 'tbsp',
            'for', 'make',
            'into' ,
            'until' ,
            'from' ,
            'are' ,
            'all' ,
            'each' ,
            'over' ,
            'allow' ,
            'while' ,
            'is',
            'at',
            'a',
            'has',
            'way',
            'you',
            'let',
            'till',
            'add',
            'about');

        $string = preg_replace( '/[\pP]/u', '', trim( preg_replace( '/\s\s+/iu', '', mb_strtolower( $string ) ) ) );

        $matchWords = array_filter( explode( ' ',$string ) , function ( $item ) use ( $stopWords ) { return !( $item == '' || in_array( $item, $stopWords ) || mb_strlen( $item ) <= 2 || is_numeric( $item ) );} );

        $wordCountArr = array_count_values( $matchWords );
        arsort( $wordCountArr );

        return array_keys( array_slice( $wordCountArr, 0, 20 ) );
    }

}