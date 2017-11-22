<?php

namespace cleanMe\Repository;

use cleanMe\Db\Connection;

class MyRepository
{

    public function select($sql){
        $rows = [];
        $db = Connection::con();
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()){
            array_push($rows, $row);
        }
        return $row;
    }

    public function save($sql){
        $db = Connection::con();
        $result = $db->query($sql);
        return $result;
    }
}