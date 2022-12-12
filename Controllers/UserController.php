<?php
class UserController
{
    public static function Signup()
    {
        if (isset($_SESSION["username"])) {
            header("location:/Home");
        } else {
            include("Views/signup.php");
        }
    }
    public static function Register()
    {
        require_once("Models/UserModel.php");
        $user = new UserModel();
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $params = [$username, $email, $password];
        $user->Add($params);
        $params = [$username, $password];
        $valid = $user->Check($params);
        if ($row = mysqli_fetch_array($valid)) {
            $_SESSION["username"] = $username;
            $_SESSION["userimage"] = $row["image"];
            $_SESSION["userid"] = $row["id"];
        }
        header("location:/Home");
    }
    public static function Signin()
    {
        if (isset($_SESSION["username"])) {
            header("location:/Home");
        } else {
            include("Views/signin.php");
        }
    }
    public static function Login()
    {
        require_once("Models/UserModel.php");
        $user = new UserModel();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $params = [$username, $password];
        $valid = $user->Check($params);
        if ($row = mysqli_fetch_array($valid)) {
            $_SESSION["username"] = $username;
            $_SESSION["userimage"] = $row["image"];
            $_SESSION["userid"] = $row["id"];
        }
        header("location:/Home");
    }
    public static function Logout()
    {
        $_SESSION["username"] = null;
        $_SESSION["userimage"] = null;
        $_SESSION["userid"] = null;
        header("location:/Home");
    }
    public static function Fetch()
    {
        require_once("Models/UserModel.php");
        $user = new UserModel();
        $Users = $user->Fetch();
        $Usertypes = $user->FetchTypes();
        include("Views/dashboardUser.php");
    }
    public static function UpdateUserType($id)
    {
        require_once("Models/UserModel.php");
        $validation_id = $_POST["validation_id"];
        $user = new UserModel();
        $params = [$validation_id, $id];
        $user->UpdateUserType($params);
        header("location:/User");
    }
    public static function DeleteUser($id)
    {
        require_once("Models/UserModel.php");
        $user = new UserModel();
        $params = [$id];
        $user->DeleteUser($params);
        header("location:/User");
    }
}
