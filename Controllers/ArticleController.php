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
        $Article = $article->FetchByIdWithCategory($id);
        $Categories = $article->FetchCategory();
        include("Views/details.php");
    }
    public static function UpdateArticleDetails($id)
    {
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $title = $_POST["title"];
        $contenu = $_POST["contenu"];
        $image = $_POST["image"];
        $category_id = $_POST["category_id"];
        $params = [$title, $contenu, $image, $category_id, $id];
        $article->Update($params);
        $Article = $article->FetchById($id);
        header('Location:/Dashboard');
    }
    public static function AddArticleDetails()
    {
        require_once("Models/ArticleModel.php");
        $code_blogueur = $_SESSION["userid"];
        $article = new ArticleModel();
        $titre = $_POST["title"];
        $contenu = $_POST["contenu"];
        $image = $_POST["image"];
        $code_categorie = $_POST["categorie"];
        $params = [$titre, $contenu, $image, $code_categorie, $code_blogueur];
        $article->Add($params);
        header('Location:/Dashboard');
    }
    public static function Add()
    { {
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
