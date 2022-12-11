<?php
class UserController{
    public static function Signup(){
        include("Views/signup.php");
    }
    public static function Register(){
        if(isset($_SESSION["username"])){
            header("location:/Home");
        }else{
            require_once("Models/UserModel.php");
            $user=new UserModel();
            $email=$_POST["email"];
            $username=$_POST["username"];
            $password=$_POST["password"];
            $params=[$username,$email,$password];
            $user->Add($params);
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
    public static function Signin(){
        include("Views/signin.php");
    }
    public static function Login(){
        if(isset($_SESSION["username"])){
            header("location:/Home");
        }else{
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
    public static function Logout(){
        $_SESSION["username"]=null;
        $_SESSION["userimage"]=null;
        $_SESSION["userid"]=null;
    }

}
