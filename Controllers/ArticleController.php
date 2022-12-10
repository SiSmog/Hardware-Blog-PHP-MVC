<?php
class ArticleController
{
    public static function Fetch($id)
    {   require_once("Models/ArticleModel.php");
        require_once("Models/CommentModel.php");
        $article = new ArticleModel();
        $Article = $article->FetchById($id);
        $comment = new CommentModel();
        $CommentsByArticle = $comment->FetchByArticle($id);
        include("Views/article.php");
    }
    public static function Detail($id)
    {   require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $Article = $article->FetchById($id);
        include("Views/detail.php");

    }
    
}
