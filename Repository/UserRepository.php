<?php

namespace cleanMe\Repository;

use cleanMe\Db\Connection;
use cleanMe\Model\User;

class UserRepository extends AbstractRepository
{

    public function getUsers(){

        $users = $this->select("SELECT * FROM users");
    }

    public function newUser(User $user){

        $sql = "INSERT INTO users (firstName, lastName) 
        VALUES (" .
            "'" . mysqli_real_escape_string(Connection::con(), $user->getFirstName()). "'," .
            "'" .mysqli_real_escape_string(Connection::con(), $user->getLastName()) . "'" .
        ")";

    }

    public function getUserByLastName($lastName){

        $users = $this->select("SELECT * FROM users WHERE last_name = '" . mysqli_real_escape_string(Connection::con(),$lastName) . "'");
    }

}