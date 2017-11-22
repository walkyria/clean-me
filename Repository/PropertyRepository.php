<?php

namespace cleanMe\Repository;

class PropertyRepository extends MyRepository
{

    /* I did not see an obvious connection between user and properties so i separated them
    Ideally this data would come from the database
    */
    public function getProperties($pets = false)
    {

        if ($pets) {
            $acceptsPets = "Yes";
        } else {
            $acceptsPets = "No";
        }

        return [
            ['7439', 'Craster Reach', '1', 'Craster', 'no smoking', "pets $acceptsPets"],
            ['2105', 'Richard House', '5', 'chester', 'smoking', "pets $acceptsPets"]
        ];
    }
}