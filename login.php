<?php
session_start();

if (isset($_POST["username"]) && isset($_POST["password"])) { //if the username and password fields are set, then they will be verified and either logged on or sent an error

    //assigns the input username and hashed password to session variables for use here and elsewhere
    $_SESSION["usernameSubmit"] = $_POST["username"];
    $_SESSION["passwordSubmit"] = hash('md5', $_POST["password"]);
    
    //echos for verification, remove later
    echo $_SESSION["usernameSubmit"];
    echo $_SESSION["passwordSubmit"];

    //will be completed once database stuff is set up, but it will check these variables against the database by sending a query
    //$verify = $database->verifyUserCredentials($_SESSION["usernameSubmit"], $_SESSION["passwordSubmit"]);

//    if ($verify == true){ //if the login details are found in the database
//        $_SESSION["email"] = $_SESSION["usernameSubmit"];
//        echo "Logged in as ".$_SESSION["email"].".";
//        $_SESSION["isLoggedIn"] = true; //sets the login status to true
//
//        $_SESSION["loggedInUserID"] = $database->getIDWithEmail($_SESSION["email"]); //gets the user id for use in other areas where the user's credentials need to be accessed
//        $database= null; //closes database connection
//        header("Location:index.php"); //redirects the user to the main page
//        exit();
//    }
//    else{ //if verify doesnt equal true, then the login fails and an error is printed
//        echo "Login Failed! Please try again.";
//
//    }

}



require_once('login.html');
