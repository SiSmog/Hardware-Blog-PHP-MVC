<?php
require_once('execute.php');
class CategoryModel
{
    public static function Fetch()
    {
        $sql = "SELECT * FROM categorie";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function FetchById($id)
    {
        $sql = "SELECT * FROM categorie where id=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        return $resultat;
    }
    public static function Update($id, $title, $contenu, $image)
    {
        $params = [$title, $contenu, $image, $id];
        $sql = "UPDATE categorie 
        SET nom= ?,description=?,image=?
        where id = ?";
        execute($sql, $params);
    }
    public static function Add($params)
    {
        $sql = "INSERT INTO categorie(nom,image,description)
        VALUES(?,?,?)";
        execute($sql, $params);
    }
    public static function Delete($params)
    {
        $sql = "DELETE FROM categorie WHERE id=? ";
        execute($sql, $params);
    }
}
