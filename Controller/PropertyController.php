<?php

namespace cleanMe\Controller;

/* */
class PropertyController
{

    /* I did not see an obvious connection between user and properties so i separated them*/
    public function getProperties($pets = false){

        if($pets){
            $acceptsPets = "Yes";
        }else{
            $acceptsPets = "No";
        }

        return [
            ['7439', 'Craster Reach', '1', 'Craster', 'no smoking', "pets $acceptsPets"],
            ['2105', 'Richard House', '5', 'chester', 'smoking', "pets $acceptsPets"]
        ];
    }


    public function displayProperties(){

        $properties = $this->getProperties(true);

        foreach ($properties as $property) {
            echo $property[1] . ", sleeps $property[2] <br />";
        }
    }

}