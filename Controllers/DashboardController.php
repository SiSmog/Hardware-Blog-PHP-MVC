<?php
require_once("Models/ArticleModel.php");
class DashboardController
{
    public static function Fetch()
    {
        $article = new ArticleModel();
        $Articles = $article->Fetch();
        include("Views/dashboard.php");
    }
}
