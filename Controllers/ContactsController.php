<?php
require_once("Models/ContactModel.php");
class ContactsController
{

    public static function Fetch()
    {
        require_once("Models/ContactModel.php");

        if ($_SESSION["uservalidation"] == "1") {
            $comment = new ContactModel();
            $Contacts = $comment->Fetch();
            include("Views/dashboardContact.php");
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
    public static function DeleteContact($id)
    {
        require_once("Models/ContactModel.php");
        $contact = new ContactModel();
        $params = [$id];
        $contact->DeleteContact($params);
        header("location:/Contacts");
    }
}
