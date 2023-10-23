<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .div {
            margin: 40vh 0 40vh 0;
        }
    </style>
</head>
<body>
    <div class="div" align="center">
        <h1>Hello</h1>
        <?php
            echo $_SESSION["username"];
        ?>
    </div>
</body>
</html>