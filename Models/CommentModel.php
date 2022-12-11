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
        $sql = "INSERT INTO commentaire(id_article,id_user,contenu,validation) 
        values(?,?,?,?)";
        execute($sql, $params);
    }
}
