<?php 
if(!function_exists("execute")){
    require("Models/execute.php");
}
class SearchController{
    public static function Fetch(){
        require_once("Models/ArticleModel.php");
        $article=new ArticleModel();
        $article->Fetch();
        include("Views/search.php");
    }
}
?>