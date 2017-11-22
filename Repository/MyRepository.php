<?php

namespace cleanMe\Repository;

use cleanMe\Db\Db;

class MyRepository
{

    public function select($sql)
    {
        $rows   = [];
        $db     = Db::con();
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            array_push($rows, $row);
        }
        return $row;
    }

    public function save($sql)
    {
        $db     = Db::con();
        $result = $db->query($sql);
        return $result;
    }
}