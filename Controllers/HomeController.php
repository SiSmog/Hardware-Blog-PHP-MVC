<?php 

class HomeController{
    public static function Fetch(){
        require_once("Models/CategoryModel.php");
        $category=new CategoryModel();
        $Categories=$category->Fetch();
        include("Views/home.php");
    }
}
