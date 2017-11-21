<?php

namespace cleanMe\Controller;

use cleanMe\Model\User;
use cleanMe\Repository\UserRepository;

class UserController
{
    /**
     * @var UserRepository
     */
    protected $userRepo;

    public function __construct(UserRepository $userRepo) //dependency injection to make code testable.
    {
        $this->userRepo = $userRepo;
    }

    /* This function could receive Request parameters from a form, validate them and then create new User */
    public function newUser($firstName, $lastName){

        if(empty($firstName)){
            return new \HttpResponseException("First Name required");
        }

        if(empty($lastName)){
           return new \HttpResponseException("Last name required");
        }

        $user = new User();
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $newUser = $this->userRepo->newUser($user);
        
        if(!$newUser){
            return header("Failure",true,500);
        }

        return header("Success",true,200);
    }

    /* This function can be improved by using html templates (views) instead of echoing the values */
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