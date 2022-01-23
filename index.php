<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp. Management V1</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- login CSS -->
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body class="body">

    <?php
    include_once('./assets/html/header.php');
    ?>

    <div class="container form-control my-container">
        <form action="./src/library/loginController.php" class="needs-validation m-4" novalidate>
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" value="" required>
                    <div class="valid-feedback">
                        All right!
                    </div>
                    <div class="invalid-feedback">
                        Please, inform your username.
                    </div>

                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" value="" required>
                    <div class="valid-feedback">
                        All right!
                    </div>
                    <div class="invalid-feedback">
                        Please, inform your password.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Enviar</button>
        </form>
    </div>

    <?php
    include_once('./assets/html/footer.php');
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/js/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>