<?php

namespace cleanMe\View;

use cleanMe\Model\User;

class UserView
{

    public function displayUser($users)
    {

        echo '<table>';

        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['first_name'] . '</td>';
            echo '<td>' . $user['last_name'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}