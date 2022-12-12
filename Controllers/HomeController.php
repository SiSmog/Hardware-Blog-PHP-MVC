<?php 

class HomeController{
    public static function Fetch(){
        require_once("Models/CategoryModel.php");
        require_once("Models/ArticleModel.php");
        require_once("Models/CommentModel.php");
        $category=new CategoryModel();
        $Categories=$category->Fetch();
        $article=new ArticleModel();
        $Articles=$article->FetchLast6();
        $comment=new CommentModel();
        $Comments=$comment->FetchLast6();
        include("Views/home.php");
    }
}
