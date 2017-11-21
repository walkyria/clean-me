<?php

namespace cleanMe\Controller;

use cleanMe\Model\User;
use cleanMe\Repository\UserRepository;

class UserController
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo) //dependency injection to make code testable
    {
        $this->userRepo = $userRepo;
    }

    public function newUser(){

        $user = new User();
        $user->setFirstName("Peter");
        $user->setLastName("Johnson");
        $this->userRepo->newUser($user);
    }

    public function getUsers(){

        $users = $this->userRepo->getUsers();

        echo '<table>';

        foreach($users as $user){
            echo '<tr>';
            echo '<td>'.$user['first_name'].'</td>';
            echo '<td>'.$user['last_name'].'</td>';
            echo '</tr>';
        }
        echo '</table>';

    }
}