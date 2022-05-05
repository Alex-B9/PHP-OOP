<?php
require 'DataBaseConnectionStatic.class.php';

class user{
    public $id;
    public $username;
    public $email;
    protected $pass;
    public $status;

    public function __construct(){
        $this->id= $id;
        $this->username = $username;
        $this->email = $email;
        $this->pass = $pass;
        $this->status = $status;
    }

    public function login($user,$pass){
        if ($this->username == $user AND $this->pass == $pass){
            return 'success log';
        }elseif ($this->username == $user AND $this->pass !== $pass){
            return 'error : wrong password';
        }elseif ($this->username !== $user AND $this->pass == $pass){
            return 'error : wrong username';
        }else{
            return 'error, try again';
        }
    }
}