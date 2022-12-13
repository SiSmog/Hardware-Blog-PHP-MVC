<?php
require_once('execute.php');
class CommentModel
{
    public static function FetchByArticle($id)
    {
        $sql = "SELECT commentaire.*,pseudo_utilisateur,image 
        FROM commentaire,user
        where user.id =commentaire.id_user and commentaire.validation=1 and id_article=?";
        $resultat = execute($sql, [$id]);
        return $resultat;
    }
    public static function Add($params)
    {
        $sql = "INSERT INTO commentaire(id_article,id_user,contenu) 
        values(?,?,?)";
        execute($sql, $params);
    }
    public static function FetchLast6()
    {
        $sql = "SELECT commentaire.*,pseudo_utilisateur,image 
        FROM commentaire,user
        where user.id =commentaire.id_user and commentaire.validation=1
        ORDER BY date_ajout desc 
        LIMIT 6";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function Fetch()
    {
        $sql = "SELECT commentaire.*,article.titre as nomArticle , user.pseudo_utilisateur as nomUser  
        FROM commentaire
        INNER JOIN article
        ON commentaire.id_article =article.id
        INNER JOIN user
        ON commentaire.id_user=user.id";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function UpdateCommentType($params)
    {
        $sql = "UPDATE commentaire 
        SET validation= ?
        WHERE id= ?";
        execute($sql, $params);
    }
    public static function DeleteComment($params)
    {
        $sql = "DELETE FROM commentaire WHERE id=? ";
        execute($sql, $params);
    }
}
