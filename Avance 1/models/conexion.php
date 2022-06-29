<?php
class conexion{
    private static $cn=null;

    public   function __construct(){
        $dns='mysql:dbname=contactenos;host=localhost';
        $user='root';
        $pass='';
        try{
            self::$cn=new PDO($dns,$user,$pass);
            self::$cn->exec("SET CHARACTER SETR utf8");
        }catch(PDOException $e){
            print "ERROR : ".$e->getMessage();
            die();
        }
    }
    public static function singleton(){
        return self::$cn;
    }

}
?>