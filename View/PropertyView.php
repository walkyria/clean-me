<?php
/**
 * Created by PhpStorm.
 * User: walkyria
 * Date: 22/11/17
 * Time: 04:56
 */

namespace cleanMe\View;


class PropertyView
{

    public function displayProperties($properties)
    {

        foreach ($properties as $property) {
            echo $property[1] . ", sleeps $property[2] <br />";
        }
    }
}