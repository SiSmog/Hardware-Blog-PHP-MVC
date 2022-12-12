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
}
