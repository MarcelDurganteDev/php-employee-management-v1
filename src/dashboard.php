<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->

<?php
include_once('../src/library/loginManager.php');
include_once('../src/library/loginController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // print_r($_POST['username'], $_POST['password']);   
    
    ?>

    <h1>This is dashboard</h1>
    <div id="alert"></div>

    <div id="employeesGrid" class="ml-5"></div>



</body>

</html>

<form action="/src/library/loginController.php" method="post"></form>