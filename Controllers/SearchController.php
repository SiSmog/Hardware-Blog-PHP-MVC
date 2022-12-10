<?php 

class SearchController{
    public static function Fetch(){
        require_once("Models/ArticleModel.php");
        $article=new ArticleModel();
        $Articles=$article->Fetch();
        include("Views/search.php");
    }
}
