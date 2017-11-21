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

    /* This function could receive Request parameters from a form, validate them and then create new User */
    public function newUser(){

        $user = new User();
        $user->setFirstName("Peter");
        $user->setLastName("Johnson");
        $this->userRepo->newUser($user);
    }

    /* This function can be improved by using html templates instead of echoing the values */
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