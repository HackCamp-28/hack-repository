<?php
//class for handling operations on all 3 databases
require_once ('Database.php');
require_once ('UserData.php');

class DataSet{
    protected $_dbHandle, $_dbInstance;
        
    public function __construct() { //constructor
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }


    public function verifyUserCredentials($username, $password){ //checks the database for an account with the matching username and password given
        $sqlQuery = "SELECT * FROM Users WHERE username = ? AND password = ?;";

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute([$username,$password]);

        $dataSet = Array();
        while ($row = $statement->fetch()) {
            $dataSet[] = $row;
        }

        //returns true or false depending on whether the account was found or not.
        if(empty($dataSet)){
            return false;

        }
        else{
            $_SESSION["userDetails"] = $dataSet;
            return true;

        }



}
    public function getUserWithEmail($email){ //returns a user's details when given that user's email.
        $sqlQuery = "SELECT * FROM Users WHERE email = ?";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute([$email]);

        $a = $statement->fetch();
        return $a ;

    }
    public function addUser($password, $firstName, $lastName, $email){ //used for registering a user, adds a user to the user database

        $getidsql = "SELECT MAX(userID) FROM Users"; //gets the biggest userid
        $maxid = $this->_dbHandle->prepare($getidsql); // prepare a PDO statement
        $maxid->execute(); // execute the PDO statement
        $a = $maxid->fetch();
        $id = $a[0] +1; //adds one to the biggest userid to create the new userid

        $sqlQuery= "INSERT INTO Users VALUES(?,?,?,?,?) ;";
        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute($id, hash("md5", $password), $firstName, $lastName, $email); // execute the PDO statement

    }
}
