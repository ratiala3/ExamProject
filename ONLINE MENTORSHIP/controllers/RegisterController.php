<?php
// include('config/app.php');

class RegisterController

{
    public function __construct()
    {
       $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }
    public function registration($username,$email,$password,$category)
    {
       $register_query = "INSERT INTO credentials(username,email,password,category) VALUES
       ('$username','$email','$password','$category')";
       $results = $this->conn->query($register_query);
       return $results;
    
    }
    public function isUserExists()
    {
        $checkuser = "SELECT email FROM credentials WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkuser);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    public function confirmPassword($password,$cpassword)
    {
        if($password == $cpassword)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    

}



?>