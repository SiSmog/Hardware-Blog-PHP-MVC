<?php
class ExploreController
{
    public static function Fetch()
    {
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $Articles = $article->Fetch();
        include("Views/explore.php");
    }
    public static function FetchByCategory($id)
    {
        require_once("Models/CategoryModel.php");
        require_once("Models/ArticleModel.php");
        $article = new ArticleModel();
        $ArticlesByCategory = $article->FetchByCategory($id);
        $category = new CategoryModel();
        $Category = $category->FetchById($id);
        include("Views/category.php");
    }
}
