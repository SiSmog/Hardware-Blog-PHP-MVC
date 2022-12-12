<?php
require_once("Models/ArticleModel.php");
class DashboardController
{
    public static function Fetch()
    {
        if ($_SESSION["uservalidation"] == "1") {
            $article = new ArticleModel();
            $Articles = $article->FetchArticleCategory();
            include("Views/dashboard.php");
        } else if ($_SESSION["uservalidation"] == "2") {
            $id = $_SESSION["userid"];
            $params = [$id];
            $article = new ArticleModel();
            $Articles = $article->FetchArticleCategoryByUser($params);
            include("Views/dashboardEditor.php");
        } else {
            header("location:/Home");
        }
    }
}
