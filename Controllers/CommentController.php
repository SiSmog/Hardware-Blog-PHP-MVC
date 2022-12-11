<?php
require_once("Models/CommentModel.php");
class CommentController
{
    public static function Add($id)
    {
        $comment = new CommentModel();
        $contenu =$_POST["contenu"];
        $userid=$_SESSION["userid"];
        $params=[$id,$userid,$contenu];
        $comment->Add($params);
        header("location:/Article/Fetch/".$id);
    }
}
