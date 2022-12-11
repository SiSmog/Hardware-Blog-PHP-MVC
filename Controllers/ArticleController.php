<?php
class ArticleController
{
    public static function Fetch($id)
    {
        require_once("Models/ArticleModel.php");
        require_once("Models/CommentModel.php");
        $article = new ArticleModel();
        $Article = $article->FetchById($id);
        $comment = new CommentModel();
        $CommentsByArticle = $comment->FetchByArticle($id);
        include("Views/article.php");
    }
    public static function Details($id)
    {
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $Article = $article->FetchById($id);
        include("Views/details.php");
    }
    public static function UpdateArticleDetails($id)
    {
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $title = $_POST["title"];
        $contenu = $_POST["contenu"];
        $image = $_POST["image"];
        $article->Update($id, $title, $contenu, $image);
        $Article = $article->FetchById($id);
        include("Views/details.php");
    }
    public static function AddArticleDetails()
    {
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $title = $_POST["title"];
        $contenu = $_POST["contenu"];
        $image = $_POST["image"];
        $article->Add($title, $contenu, $image);
    }
    public static function Add(){
    {
        require_once("Models/CategoryModel.php");
        $category = new CategoryModel();
        $Categories = $category->Fetch();
        include("Views/addArticle.php");
    }
    }
    public static function DeleteArticle($id)
    {
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $params = [$id];
        $article->Delete($params);
        header('Location:/Dashboard');
    }
}
