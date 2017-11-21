<?php

namespace cleanMe\Db;

class Connection
{

    private static $dbCon;

    public static function con(){
        if(!isset(self::$dbCon)){
            self::$dbCon = new \mysqli('127.0.0.1','root', 'test', 'testing', 8889);
        }

        return self::$dbCon;
    }
}