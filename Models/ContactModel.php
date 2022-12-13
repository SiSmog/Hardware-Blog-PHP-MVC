<?php
require_once('execute.php');
class ContactModel
{
    public static function Fetch()
    {
        $sql = "SELECT * FROM contact";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function Add($params)
    {
        $sql = "insert into contact(nom,email,sujet,message) values(?,?,?,?)";
        execute($sql, $params);
    }
    public static function DeleteContact($params)
    {
        $sql = "DELETE FROM contact WHERE id=? ";
        execute($sql, $params);
    }
}
