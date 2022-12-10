<?php
require_once('execute.php');
class ArticleModel
{
    public static function Fetch()
    {
        $sql = "select article.id,titre,date_de_modification,article.image,user.image as userimage ,pseudo_utilisateur from article,user 
        where article.id=user.id";
        $resultat = execute($sql);
        $_SESSION["Articles"] = $resultat;
    }
    public static function FetchById($id)
    {
        $sql = "SELECT * FROM article where id=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        $_SESSION["Article"] = $resultat;
    }
    public static function FetchByCategory($id)
    {
        $sql ="select article.id,titre,date_de_modification,article.image,user.image as userimage ,pseudo_utilisateur from article,user 
        where article.id=user.id and code_categorie=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        $_SESSION["ArticlesByCategory"] = $resultat;
    }
}
?>