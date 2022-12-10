<?php 
if(!function_exists("execute")){
    require("Models/execute.php");
}
class HomeController{
    public static function Fetch(){
        require_once("Models/CategoryModel.php");
        $category=new CategoryModel();
        $category->Fetch();
        include("Views/home.php");
    }
}
?>