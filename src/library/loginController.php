<!-- “loginController.php”
This file will handle the user's HTTP requests when they want to log in or log out, therefore, it must call the functions of the "loginManager.php" once the request has been received to carry out the action.

“loginManager.php”
This file will contain the necessary functions so that the user can log in, save their session data and log out.

“sessionHelper.php”
This file will check that the user session is still active and if not, you must call the corresponding function of "loginManager.php" to logout the user. In the event that the user remains more than 10 minutes in the session, the user will have to be logged out.

You will have to take into account that in order for the controllers to execute the functions of their respective "managers" files, you must include this files into the corresponding controllers. -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // initialize user session
include_once("./loginManager.php");

echo "<pre>";

if (isset($_POST['username'])) {
    if (!empty($_POST['username'])) {
        if (isset($_POST['password'])) {
            if (!empty($_POST['password'])) {

                $validationLoginReturn = validateLogin($_POST['username'], $_POST['password']);

                if ($validationLoginReturn) {
                    $_SESSION['msg'] = "success";
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['profile'] = "admin";
                    header("Location: ../dashboard.php");
                } else {
                    $_SESSION['msg'] = "error";
                    header("Location: ../../index.php");
                }
            }
        }
    }
}

// print_r($_POST);
// print_r($_POST['username']);
// echo '<br>';
// print_r($_POST['password']);
// echo '<br>';
// print_r($username);
// echo '<br>';
// print_r($password);

?>

<!-- <form action="../dashboard.php" method="post"></form> -->
<!-- <form action="../../index.php" method="post"></form> -->