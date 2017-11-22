<?php

namespace cleanMe\Controller;

use cleanMe\Model\User;
use cleanMe\Repository\UserRepository;
use cleanMe\View\UserView;

class UserController
{
    /**
     * @var UserRepository
     */
    protected $userRepo;

    /**
     * @var UserView
     */
    protected $userView;

    public function __construct(
        UserRepository $userRepo,
        UserView $userView
    ) //dependency injection to make code testable.
    {
        $this->userRepo = $userRepo;
        $this->userView = $userView;
    }

    /* This function could receive Request parameters from a form, validate them and then create new User */
    public function newUser($firstName, $lastName)
    {

        if (empty($firstName)) {
            echo "Firstname is required";
            return false;
        }

        if (empty($lastName)) {
            echo "Lastname is required";
            return false;
        }

        $user = new User();
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $newUser = $this->userRepo->newUser($user);

        if (!$newUser) {
            return header("Failure", true, 500);
        }

        return header("Success", true, 200);
    }

    /* This function can be improved by using html templates (views) instead of echoing the values */
    public function getUsers()
    {

        $users = $this->userRepo->getUsers();
        $this->userView->displayUser($users);
    }
}