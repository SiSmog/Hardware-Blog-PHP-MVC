<?php
class UserController{
    public static function Signup(){
        include("Views/signup.php");
    }
    public static function Register(){
        require_once("Models/UserModel.php");
        $user=new UserModel();
        $email=$_POST["email"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $params=[$username,$email,$password];
        $user->Add($params);
        header("location:/Home");
    }
    public static function Signin(){
        include("Views/signin.php");
    }
    public static function Login(){
        require_once("Models/UserModel.php");
        $user=new UserModel();
        $username=$_POST["username"];
        $password=$_POST["password"];
        $params=[$username,$password];
        $valid=$user->Check($params);
        if($row=mysqli_fetch_array($valid)){
            $_SESSION["username"]=$username;
            $_SESSION["userimage"]=$row["image"];
            $_SESSION["userid"]=$row["id"];
        }
        header("location:/Home");
    }
}
?>