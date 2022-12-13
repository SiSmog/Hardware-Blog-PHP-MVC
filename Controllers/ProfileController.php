<?php
class ProfileController
{


    public static function Details()
    {
        require_once("Models/UserModel.php");
        $id = $_SESSION["userid"];
        $user = new UserModel();
        $params = [$id];
        $User = $user->FetchById($params);
        include("Views/profile.php");
    }
    public static function UpdateProfileDetails()
    {
        require_once("Models/UserModel.php");
        $id = $_SESSION["userid"];
        $params2 = [$id];
        $user = new UserModel();
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        if ($_POST["image"] != null and $_POST["image"] != "") {
            $image = $_POST["image"];
            $params = [$name, $email, "",$image, $id];
            $_SESSION["userimage"] = $image;
        }else{
            $params = [$name, $email, "", $id];
        }
        $originPassword = $user->GetPassword($params2);
        if ($password == $password2 and !($password == NULL or $password == "")) {
            $params[2] = $password;
            $user->UpdateUserProfile($params);
            $_SESSION["username"] = $name;
            header("location:/Home");
        } else if ($password != $password2) {
            $User = $user->FetchById($params2);
            include("Views/profile.php");
        } else if (($password == NULL or $password == "") or ($password2 == NULL or $password2 == "")) {
            $params[2] = $originPassword;
            $user->UpdateUserProfile($params);
            $_SESSION["username"] = $name;
            header("location:/Home");
        }
    }
    public static function UpdateImageDetails()
    {
        require_once("Models/UserModel.php");
        $id = $_SESSION["userid"];
        $params2 = [$id];
        $user = new UserModel();
        $image = $_POST["image"];
        $params = [$image, $id];
        $user->UpdateUserProfile($params);
        $User = $user->FetchById($params2);
        include("Views/profile.php");
    }
}
