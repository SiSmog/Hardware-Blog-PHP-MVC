<?php
require_once('execute.php');
class CategoryModel
{
    public static function Fetch()
    {
        $sql = "SELECT * FROM categorie";
        $resultat = execute($sql);
        $_SESSION["Categories"] = $resultat;
    }
    public static function FetchById($id)
    {
        $sql = "SELECT * FROM categorie where id=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        $_SESSION["Category"] = $resultat;
    }
}
?>