<?php
session_start();
require_once('DataBaseConnection.class.php');

class user {
    public $id;
    public $username;
    public $email;
    protected $password;
    public $status;
    public $bdd;

    public function __construct($username, $email, $password){
        $this->password = $password;
        $this->username = $username;
        $this->email = $email;
        $this->bdd = new DataBaseConnexion('becode', 'root', '');
    }


//    public function sign($username, $email, $password){
//        $sql = "INSERT INTO users VALUES(0, $username, $email, $password, '')";
//        $query = $this->->prepare($sql);
//        $query->execute();
//    }

    public function check_login(){

        $sql="SELECT * FROM accounts WHERE username= '$this->username' AND password = '$this->password'";
        $query = $this->bdd->DataBaseConnexion()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
//        password_verify($_POST['password'],
        if ($this->password == $result['password'] AND
            $this->username == $result['username']) {
            echo "successfully co";
          header('location:../patrick.php');
        }else{
            echo "wrong password and/or username";
            header('location:../index.php');
        }

//        return $query;
    }

    public function logout(){
        session_start();
        session_destroy();

        header('location:../index.php');
    }

//    public function login($user,$pass){
//        if ($this->username == $user AND $this->password == $pass){
//            return 'success log';
//            header('location:pages/home.php');
//        }elseif ($this->username == $user AND $this->password !== $pass){
//            return 'error : wrong password';
//        }elseif ($this->username !== $user AND $this->password == $pass){
//            return 'error : wrong username';
//        }else{
//            return 'error, try again';
//        }
//    }
}