<?php

class DataBaseConnexion {
    public $db;
    private $login;
    private $pass;

    protected $connection;

    public function __construct($db, $login, $pass) {
        $this -> login = $login;
        $this -> pass = $pass;
        $this -> db = $db;
    }

    public function DataBaseConnexion(){
        $bdd = $this->connection;
        try {
            $bdd = new PDO(
                'mysql:host=localhost;dbname='.$this -> db .';charset=utf8',
                    $this -> login,
                    $this -> pass
            );
            $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//            echo "successfully co <br>";
            return $bdd;
        }catch (PDOException $e){
            $msg = 'ERROR PDO in ' .$e->getFile() . 'L.' . $e->getLine() . ' : ' . $e ->getMessage();
            die($msg);
        }
    }

    function count()
    {
        $count = $this->DataBaseConnexion()->prepare("SELECT COUNT(*) as total FROM tp1_user");
        $count->execute();
        $data = $count->fetch(PDO::FETCH_OBJ);
        echo $data->total;
    }
}

$tst = new DataBaseConnexion('becode',
    'root', '');
//$tst -> count();