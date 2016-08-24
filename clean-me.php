<?php

    class User
    {
        public $prefix;
        public $firstName;
        public $lastName;
        public $suffix;

        function savePerson(){
            $db = new mysqli('127.0.0.1', 'root', 'test', 'testing', 8889);
            $db->query('INSERT INTO users (first_name, second_name) VALUES (\''.$this->firstName.'\', \''.$this->lastName.'\')');
        }

        function get_person_by_last_name(){
                $db = new mysqli('127.0.0.1', 'root', 'test', 'testing', 8889);
                $res = $db->query('SELECT * FROM users WHERE second_name = \''.$this->lastName.'\'');

                while ($x = $res->fetch_assoc()){
                    echo $x['first_name'].' '.$x['second_name'];
                }
        }

        function getUsers(){


            $db = new mysqli('127.0.0.1', 'root', 'test', 'testing', 8889);
            $res = $db->query('SELECT * FROM users');

            echo '<table>';

            while ($x = $res->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$x['first_name'].'</ td>';
                echo '<td>'.$x['second_name'].'</ td>';
                echo '</tr>';
            }
            echo '</table>';

        }

        public function GetProperties()
        {
            // $acceptsPets = 1;
            return [
                ['7439', 'Craster Reach', '1', 'Craster', 'no smoking', "pets $acceptsPets"],
                ['2105', 'Richard House', '5', 'chester', 'smoking', "pets $acceptsPets"]
            ];
        }

    }

    $user = new User();
    $user->firstName = "Peter";
    $user->lastName = "Johnson";


    echo($user->firstName);
    echo($user->lastName);

    $user->savePerson();
    $user->get_person_by_last_ name();
    $user->getUsers();

    $data = @$user->GetProperties(true);

    foreach ($data as $value):
        echo $value[1] . ", sleeps {$value[2]} <br />";
    endforeach;
?>
