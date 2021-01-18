<?php
session_start();

if (isset($_POST["email"]) && isset($_POST["password"])) { //if the username and password fields are set, then they will be verified and either logged on or sent an error

    require_once('DataSet.php');
    $database = new DataSet(); //opens database connection

    //assigns the input username and hashed password to session variables for use here and elsewhere
    $_SESSION["emailSubmit"] = $_POST["email"];
    $_SESSION["passwordSubmit"] = hash('md5', $_POST["password"]);

    //will be completed once database stuff is set up, but it will check these variables against the database by sending a query
    $verify = $database->verifyUserCredentials($_SESSION["emailSubmit"], $_SESSION["passwordSubmit"]);

    if ($verify == true){ //if the login details are found in the database
        $_SESSION["email"] = $_SESSION["usernameSubmit"];

        $_SESSION["userDetails"] = $database->getUserWithEmail($_SESSION["email"]); //makes a session variable with an array of all user details

        $_SESSION["isLoggedIn"] = true; //sets the login status to true

        $database= null; //closes database connection
        //header("Location:index.php"); //redirects the user to the main page
        exit();
    }
    else{ //if verify doesnt equal true, then the login fails and an error is printed
        echo "Login Failed! Please try again.";

    }

}



require_once('login.html');
