<?php 
if(!function_exists("execute")){
    require("Models/execute.php");
}
class ExploreController{
    public static function Fetch(){
        require_once("Models/ArticleModel.php");
        $article=new ArticleModel();
        $article->Fetch();
        include("Views/explore.php");
    }
    public static function FetchByCategory($id){
        require_once("Models/CategoryModel.php");
        require_once("Models/ArticleModel.php");
        $article=new ArticleModel();
        $article->FetchByCategory($id);
        $category=new CategoryModel();
        $category->FetchById($id);
        include("Views/category.php");
    }
}
?>
