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
        $originPassword = $user->GetPassword($params2);
        if ($password == $password2) {
            $params = [$name, $email, $password, $id];
            $user->UpdateUserProfile($params);
            header("location:/Home");
        } else if ($password != $params2) {
            $User = $user->FetchById($params2);
            include("Views/profile.php");
        } else if (($password == NULL) or ($params2 == NULL)) {
            $params = [$name, $email, $originPassword, $id];
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
