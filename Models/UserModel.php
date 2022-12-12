<?php
require_once('execute.php');
class UserModel
{
    public static function Fetch()
    {
        $sql = "SELECT user.* ,usertype.type 
        FROM user
        INNER JOIN usertype
        ON usertype.id = user.validation";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function FetchTypes()
    {
        $sql = "SELECT *
        FROM usertype";
        $resultat = execute($sql);
        return $resultat;
    }
    public static function Check($params)
    {
        $sql = "SELECT * FROM user
        Where pseudo_utilisateur=? AND password=?";
        $resultat = execute($sql, $params);
        if (mysqli_num_rows($resultat) > 0) {
            return $resultat;
        } else {
            return false;
        }
    }
    public static function Add($params)
    {
        $sql = "INSERT INTO user(pseudo_utilisateur,email,password) 
        values(?,?,?)";
        execute($sql, $params);
    }

    public static function UpdateUserType($params)
    {
        $sql = "UPDATE user 
        SET validation= ?
        WHERE id= ?";
        execute($sql, $params);
    }
    public static function DeleteUser($params)
    {
        $sql = "DELETE FROM user WHERE id=? ";
        execute($sql, $params);
    }
}
