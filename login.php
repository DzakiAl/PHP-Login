<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            margin: 35vh 0 0 0;
        }

        .title {
            font-size: 2.5vw;
        }

        .field {
            width: 20vw;
            height: 2vw;
            border: none;
            background-color: transparent;
            border-bottom: 0.2vw solid white;
            color: white;
            margin: 0 0 1vw 0;
            font-size: 1.2vw;
        }

        .submit {
            width: 8vw;
            height: 3vw;
            background-color: transparent;
            color: white;
            border: 0.2vw solid white;
            transition: 0.5s all ease-in-out;
            font-size: 1.2vw;
        }

        .submit:hover {
            background-color: white;
            color: black;
            transition: 0.5s all ease-in-out;
        }
    </style>
</head>
<body>
    <form action="login.php"  method="post" align="center">
        <h1 class="title">Login Page</h1>
        <input class="field" type="text" name="username" placeholder="Enter your username"><br>
        <input class="field" type="password" name="password" placeholder="Enter your password"><br>
        <input class="submit" type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php 
    if (isset($_POST["login"])) {

        if(!empty("username") && !empty("password")){
            $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            header("Location: home.php");
        } else {
            echo "The username or password must not empty!";
        }
    }
    ?>