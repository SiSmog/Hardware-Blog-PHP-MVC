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
        $image = "default" . random_int(1, 12) . ".png";
        $params = [$username, $email, $password, $image];
        $user->Add($params);
        $params = [$username, $password];
        $valid = $user->Check($params);
        if ($row = mysqli_fetch_array($valid)) {
            $_SESSION["username"] = $username;
            $_SESSION["userimage"] = $row["image"];
            $_SESSION["userid"] = $row["id"];
            $_SESSION["uservalidation"] = $row["validation"];
        }
        header("location:/Home");
    }
    public static function Signin()
    {
        if (isset($_SESSION["username"])) {
            header("location:/Home");
        } else {
            include("Views/signin.php");
            if (isset($_SESSION["error"])) {
                $_SESSION["error"] = null;
            }
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
            $_SESSION["uservalidation"] = $row["validation"];
            header("location:/Home");
        } else {
            $_SESSION["error"] = true;
            header("location:/User/Signin");
        }
    }
    public static function Logout()
    {
        $_SESSION["username"] = null;
        $_SESSION["userimage"] = null;
        $_SESSION["userid"] = null;
        $_SESSION["uservalidation"] = null;

        header("location:/Home");
    }
    public static function Fetch()
    {
        require_once("Models/UserModel.php");

        if ($_SESSION["uservalidation"] == "1") {
            $user = new UserModel();
            $Users = $user->Fetch();
            $Usertypes = $user->FetchTypes();
            include("Views/dashboardUser.php");
        } else if ($_SESSION["uservalidation"] == "2") {
            $id = $_SESSION["userid"];
            $params = [$id];
            $article = new ArticleModel();
            $Articles = $article->FetchArticleCategoryByUser($params);
            include("Views/dashboardEditor.php");
        } else {
            header("location:/Home");
        }
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
