<?php
require_once("Models/CommentModel.php");
class CommentController
{
    public static function Add($id)
    {
        $comment = new CommentModel();
        $contenu = $_POST["contenu"];
        $userid = $_SESSION["userid"];
        $params = [$id, $userid, $contenu];
        $comment->Add($params);
        header("location:/Article/Fetch/" . $id);
    }
    public static function Fetch()
    {
        require_once("Models/CommentModel.php");

        if ($_SESSION["uservalidation"] == "1") {
            $comment = new CommentModel();
            $Comments = $comment->Fetch();
            include("Views/dashboardComment.php");
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
    public static function UpdateCommentType($id)
    {
        require_once("Models/CommentModel.php");
        $validation_id = $_POST["validation_id"];
        $comment = new CommentModel();
        $params = [$validation_id, $id];
        $comment->UpdateCommentType($params);
        header("location:/Comment");
    }

    public static function DeleteComment($id)
    {
        require_once("Models/CommentModel.php");
        $comment = new CommentModel();
        $params = [$id];
        $comment->DeleteComment($params);
        header("location:/Comment");
    }
}
