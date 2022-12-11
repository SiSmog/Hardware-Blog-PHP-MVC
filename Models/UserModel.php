<?php
require_once('execute.php');
class UserModel
{
    public static function Fetch()
    {
        $resultat = "";
        return $resultat;
    }
    public static function Check($params)
    {
        $sql = "SELECT * FROM user
        Where pseudo_utilisateur=? AND password=?";
        $resultat=execute($sql, $params);
        if(mysqli_num_rows($resultat)>0){
            return $resultat;
        }else{
            return false;
        }
    }
    public static function Add($params)
    {
        $sql = "INSERT INTO user(pseudo_utilisateur,email,password) 
        values(?,?,?)";
        execute($sql, $params);
    }

}
