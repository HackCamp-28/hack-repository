<?php
//class to create objects out of entries from the Users database
class UserData {
    
    protected $_id, $_password, $_firstName, $_lastName, $_email;
    
    public function __construct($dbRow) { //takes a row from the Users database as an input
        //takes each attribute from the database row and assigns it to an object variable
        $this->_id = $dbRow['userID'];
        $this->_password = $dbRow['FirstName'];
        $this->_firstName = $dbRow['City'];
        $this->_lastName = $dbRow['LastName'];
        $this->_email = $dbRow['Email'];

    }

    //method to print all details of the row, mostly used for debugging
    public function printDetails(){
        echo $this->_id.", ".$this->_firstName.", ".$this->_lastName.", ".$this->_email.", ".$this->_password.";";
    }

    //accessor for UserID
    public function getUserID() {
        return $this->_id;
    }

    //accessor for FirstName
    public function getFirstName() {
       return $this->_firstName;
    }

    //accessor for LastName
    public function getLastName() {
       return $this->_lastName;
    }

    //accessor for Email
    public function getEmail() {
        return $this->_email;
    }

    //accessor for password
    public function getPassword() {
        return $this->_password;
    }
            
}


