<?php
require_once("Models/ContactModel.php");
class ContactController
{
    public static function Fetch()
    {
        include("Views/contact.php");
    }
    public static function Add()
    {
        $contact=new ContactModel();
        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        $params=[$name,$email,$subject,$message];
        $contact->Add($params);
        header("location:/Home");
    }

}
