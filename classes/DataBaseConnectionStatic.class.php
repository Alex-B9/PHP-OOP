<?php
// static class connection
class DataBaseConnectionStatic{
    private static $db = 'becode';
    private static $login = 'root';
    private static $pass = '';
    public static function DataBaseConnectionStatic(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=' .
            DataBaseConnectionStatic::$db . ';charset=utf8',DataBaseConnectionStatic::$login, DataBaseConnectionStatic::$pass);
            $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//            echo "successfully co <br>";
            return $bdd;
        }catch (PDOException $e){
            $msg = 'ERROR PDO in ' .$e->getFile() . 'L.' . $e->getLine() . ' : ' . $e ->getMessage();
            die($msg);
        }
    }
}
DataBaseConnectionStatic::DataBaseConnectionStatic();