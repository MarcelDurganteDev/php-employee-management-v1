<!-- This file will contain the necessary functions so that the user can log in, save their session data and log out. -->

<?php


function validateLogin($username, $pwd)
{

    if ($username == "admin" && $pwd == 12345) {
        return true;
    } else {
        return false;
    }
}




?>

<!-- <form action="/src/library/sessionHelper.php" method="post"></form> -->