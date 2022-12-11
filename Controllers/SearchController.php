<?php 

class SearchController{
    public static function Filter(){
        require_once("Models/ArticleModel.php");
        $article=new ArticleModel();
        if(isset($_POST["search"])){
            $search=$_POST["search"];
            $Articles=$article->Filter($search);
        }else{
            $Articles=$article->Fetch();
        }
        include("Views/search.php");
    }
}
