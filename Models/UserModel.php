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
        return $resultat;
    }
    public static function Add($params)
    {
        $sql = "INSERT INTO user(pseudo_utilisateur,email,password,image) 
        values(?,?,?,?)";
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
    public static function UpdateUserDetails($params)
    {
        $sql = "UPDATE user 
        SET validation= ?
        WHERE id= ?";
        execute($sql, $params);
    }
    public static function FetchById($params)
    {
        $sql = "SELECT *
        FROM user
        where id=?";
        $resultat = execute($sql, $params);
        return $resultat;
    }
    public static function UpdateUserProfile($params)
    {
        if(count($params)==5){
            $sql = "UPDATE user 
        SET pseudo_utilisateur= ?, email=?,password=?,image=?
        WHERE id =?";
        }else{
            $sql = "UPDATE user 
        SET pseudo_utilisateur= ?, email=?,password=?
        WHERE id =?";
        }
        

        execute($sql, $params);
    }
    public static function GetPassword($params)
    {
        $sql = "select password 
        from user 
        WHERE id =?";
        $resultat = execute($sql, $params);
        $resultat = mysqli_fetch_array($resultat)["password"];
        return $resultat;
    }
}
