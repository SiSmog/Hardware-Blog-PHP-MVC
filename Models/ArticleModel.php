<?php
require_once('execute.php');
class ArticleModel
{
    public static function Fetch()
    {
        $sql = "select article.*,user.image as userimage ,pseudo_utilisateur 
        FROM article
        INNER JOIN user
        ON user.id =article.code_blogueur";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function Filter($search)
    {
        $sql = "select article.*,user.image as userimage ,pseudo_utilisateur 
        FROM article
        INNER JOIN user
        ON user.id =article.code_blogueur
        Where titre like ?
        UNION
        select article.*,user.image as userimage ,pseudo_utilisateur 
        FROM article
        INNER JOIN user
        ON user.id =article.code_blogueur
        Where titre like ?;";
        $params = [$search . "%", "%" . $search . "%"];
        $resultat = execute($sql, $params);
        return $resultat;
    }
    public static function FetchById($id)
    {
        $sql = "SELECT * FROM article where id=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        return $resultat;
    }
    public static function FetchByCategory($id)
    {
        $sql = "select article.id,titre,date_de_modification,article.image,user.image as userimage ,pseudo_utilisateur from article,user 
        where article.id=user.id and code_categorie=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        return $resultat;
    }
    public static function Update($params)
    {
        $sql = "UPDATE article 
        SET titre= ?,contenu=?,image=?,code_categorie=?
        where id = ?";
        execute($sql, $params);
    }
    public static function Add($params)
    {
        $sql = "INSERT INTO article(titre,contenu,image,code_categorie,code_blogueur)
        VALUES(?,?,?,?,?)";
        execute($sql, $params);
    }
    public static function Delete($params)
    {
        $sql = "DELETE FROM article WHERE id=? ";
        execute($sql, $params);
    }
    public static function FetchArticleCategory()
    {
        $sql = "select article.*,pseudo_utilisateur,nom 
        FROM article
        INNER JOIN user 
        ON user.id =article.code_blogueur
        INNER JOIN categorie 
        ON categorie.id =article.code_categorie ";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function FetchCategory()
    {
        $sql = "SELECT *
        FROM categorie";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function FetchByIdWithCategory($id)
    {
        $sql = "SELECT article.*,nom
        FROM article 
        INNER JOIN categorie
        ON article.code_categorie=categorie.id
        where article.id=?";
        $params = array($id);
        $resultat = execute($sql, $params);
        return $resultat;
    }
}
