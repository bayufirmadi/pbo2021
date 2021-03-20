<?php
    class User
    {
        protected $username;
        protected $password;

	    public function setusername($a){
		    $this->username = $a;
	    }
	    public function setpassword($a){
		    $this->password = $a;
	    }
 
	    public function getusername() {
		    return $this->username; 
	    }
	    public function getpassword() {
		    return $this->password;
	    }

        function login(){

        }
}
?>

