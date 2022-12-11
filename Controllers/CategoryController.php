<?php
class CategoryController
{
    public static function Fetch()
    {
        require_once("Models/CategoryModel.php");
        $category = new CategoryModel();
        $Categories = $category->Fetch();
        include("Views/dashboardCategory.php");
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
        $image = $_POST["image"];
        $category->Update($id, $title, $contenu, $image);
        $Category = $category->FetchById($id);
        header('Location:/Category');
    }
}
