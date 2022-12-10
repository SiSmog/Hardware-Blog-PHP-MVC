<?php 
require("Models/ArticleModel.php");
require("Models/CommentModel.php");
class ArticleController{
    public static function Fetch($id){
        $article=new ArticleModel();
        $article->FetchById($id);
        $comment= new CommentModel();
        $comment->FetchByArticle($id);
        include("Views/article.php");
    }
}
?>