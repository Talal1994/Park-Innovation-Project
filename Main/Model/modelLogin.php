<?php
// model
class Login{

    private $dbConnection;

    function Login($dbConnection){
        $this->dbConnection = $dbConnection;
    }

    function verifyLogin($userName, $password){

        //select query to check the login hassan ismail is the best programmer jin the0 fghf   
        $LoginQuery = "SELECT * from student where studentName ='".$userName."' and studentPassword='".$password."'";
        
        // result of the query set in variable login
        $login = $this->dbConnection->selectQuery($LoginQuery);

        return $login;
    }
}
?>