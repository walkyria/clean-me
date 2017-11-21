<?php

    class User_Deprecated //renamed so it does not conflict with new one
    {
        public $prefix; //Does not get used anywhere
        public $firstName;
        public $lastName;
        public $suffix; //Does not get used anywhere

        // Renamed function to newUser in UserRepository
        function savePerson(){
            $db = new mysqli('127.0.0.1', 'root', 'test', 'testing', 8889);
            $db->query('INSERT INTO users (first_name, second_name) VALUES (\''.$this->firstName.'\', \''.$this->lastName.'\')');
        }

        //renamed to getUserByLastName in UserRepository
        function get_person_by_last_name(){
                $db = new mysqli('127.0.0.1', 'root', 'test', 'testing', 8889);
                $res = $db->query('SELECT * FROM users WHERE second_name = \''.$this->lastName.'\'');

                while ($x = $res->fetch_assoc()){
                    echo $x['first_name'].' '.$x['second_name'];
                }
        }

        //function in UserRepository
        function getUsers(){


            $db = new mysqli('127.0.0.1', 'root', 'test', 'testing', 8889);
            $res = $db->query('SELECT * FROM users');

            echo '<table>';

            while ($x = $res->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$x['first_name'].'</td>';
                echo '<td>'.$x['second_name'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }

        public function GetProperties() //function in PropertyController
        {
            // $acceptsPets = 1;
            return [
                ['7439', 'Craster Reach', '1', 'Craster', 'no smoking', "pets $acceptsPets"],
                ['2105', 'Richard House', '5', 'chester', 'smoking', "pets $acceptsPets"]
            ];
        }

    }

    // function newUser in UserController to create a new user
    $user = new User();
    $user->firstName = "Peter";
    $user->lastName = "Johnson";


    echo($user->firstName);
    echo($user->lastName);

    $user->savePerson(); // part of newUser function in UserController


    $user->get_person_by_last_name(); //there should be a lastName parameter being passed
    $user->getUsers(); //function getUsers in UserController

    $data = $user->GetProperties(true); //function getProperties in PropertyController. I was not sure where to put this.

//function to display properties in PropertyController
    foreach ($data as $value):
        echo $value[1] . ", sleeps {$value[2]} <br />";
    endforeach;
?>
