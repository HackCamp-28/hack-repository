<?php
session_start();

require_once('DataSet.php');
$database = new DataSet(); //opens connection with database

//defining links for the page
$_SESSION["loggingInLink"] = '<a href="signup.php">Sign Up</a><span> | </span><a href="login.php"> Login</a>';
$_SESSION["bidLink"] = '<a href="login.php">Bid List</a>';
$_SESSION["logoutLink"] = '';

//checks if every field is set
if (isset($_POST["newemail"]) && isset($_POST["newpassword"]) && isset($_POST["confpassword"]) && isset($_POST["newfirstname"]) && isset($_POST["newlastname"])) {
    //checks if the password field equals the confirm password field
    if($_POST["newpassword"] == $_POST["confpassword"]){
        //checks to see if the string in the email field contains an @ sign and a . to verify that its actually an email
        if(strpos($_POST["newemail"], "@")&& strpos($_POST["newemail"], ".") == true){
                //if all of the verification goes through, the user is added
                $database->addUser($_POST["newpassword"], $_POST["newfirstname"], $_POST["newlastname"], $_POST["newemail"]);

                //logged in is set to true
                $_SESSION["email"] = $_POST["newemail"];
                echo "Logged in as ".$_SESSION["email"].".";
                $_SESSION["isLoggedIn"] = true;

                //gets the user id
                $_SESSION["userDetails"] = $database->getUserWithEmail($_SESSION["email"]);
                $database= null; //closes database connection
                header("Location:index.php"); //redirects to the main page
                exit();
            }
        }
        //if the email doesnt contain @ or . it prints an error message
        else{
            echo "Sign up failed! Invalid email.";
        }
    }
    //if the passwords dont match, print an error
    else{
        echo "Sign up failed! Passwords do not match.";
    }




require_once('signup.html');



