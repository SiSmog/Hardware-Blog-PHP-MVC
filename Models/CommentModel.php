<?php
require_once('execute.php');
class CommentModel
{
    public static function FetchByArticle($id)
    {
        $sql = "SELECT commentaire.*,pseudo_utilisateur,image 
        FROM commentaire,user
        where user.id =commentaire.id_user and validation=1 and id_article=?";
        $resultat = execute($sql, [$id]);
        return $resultat;
    }
    public static function Insert($params)
    {
        $sql = "INSERT INTO commentaire(id_article,id_user,contenu,validation,date_ajout) 
        values(?,?,?,?,?)";
        execute($sql, $params);
    }
}
