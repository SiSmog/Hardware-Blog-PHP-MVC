<?php
require("Models/ArticleModel.php");
require("Models/CommentModel.php");
class ArticleController
{
    public static function Fetch($id)
    {
        $article = new ArticleModel();
        $Article = $article->FetchById($id);
        $comment = new CommentModel();
        $CommentsByArticle = $comment->FetchByArticle($id);
        include("Views/article.php");
    }
}
