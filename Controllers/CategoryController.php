<?php
class CategoryController
{
    public static function Fetch()
    {

        if ($_SESSION["uservalidation"] == "1") {
            require_once("Models/CategoryModel.php");
            $category = new CategoryModel();
            $Categories = $category->Fetch();
            include("Views/dashboardCategory.php");
        } else if ($_SESSION["uservalidation"] == "2") {
            require_once("Models/ArticleModel.php");
            $id = $_SESSION["userid"];
            $params = [$id];
            $article = new ArticleModel();
            $Articles = $article->FetchArticleCategoryByUser($params);
            include("Views/dashboardEditor.php");
        } else {
            header("location:/Home");
        }
    }
    public static function AddCategoryDetails()
    {
        require_once("Models/CategoryModel.php");
        $category = new CategoryModel();
        $title = $_POST["title"];
        $contenu = $_POST["contenu"];
        $image = $_POST["image"];
        $params = [$title, $image, $contenu];
        $category->Add($params);
        header('Location:/Category');
    }
    public static function Add()
    { {
            include("Views/addCategory.php");
        }
    }
    public static function DeleteCategory($id)
    {
        require_once("Models/CategoryModel.php");
        $category = new CategoryModel();
        $params = [$id];
        $category->Delete($params);
        header('Location:/Category');
    }


    public static function Details($id)
    {
        require_once("Models/CategoryModel.php");
        $category = new CategoryModel();
        $Category = $category->FetchById($id);
        include("Views/detailsCategory.php");
    }
    public static function UpdateCategoryDetails($id)
    {
        require_once("Models/CategoryModel.php");
        $category = new CategoryModel();
        $title = $_POST["title"];
        $contenu = $_POST["contenu"];
        if($_POST["image"]!=null and $_POST["image"]!=""){
            $image = $_POST["image"];
            $params = [$title, $contenu, $image, $id];
        }else{
            $params = [$title, $contenu, $id];
        }
        $category->Update($params);
        $Category = $category->FetchById($id);
        header('Location:/Category');
    }
}
require_once("Models/UserModel.php");
