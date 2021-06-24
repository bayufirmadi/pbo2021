<?php 

namespace App\Model;

class Pengguna
{
    public $username;
    public $password;
    protected $email;

    public function login(){

    }
    public function register(){

    }

    public function setusername(){
        $this->username - $username;
    }
    public function getusername()
    {
        return $this->$username;
    }
    public function setpassword(){
        $this->password - $password;
    }
    public function getpassword()
    {
        return $this->$password;
    }  
    public function setemail(){
        $this->email - $email;
    }
    public function getemail()
    {
        return $this->$email;
    }     
  
}