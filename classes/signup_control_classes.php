<?php
class signup_contr extends signup{
    private $user_id;
    private $password;
    private $password_repeat;
    private $email;
    public function __construct($user_id, $password,$password_repeat, $email){
        $this->user_id=$user_id;
        $this->password=$password;
        $this->password_repeat=$password_repeat;
        $this->email=$email;
    }
    public function signup_user(){
        if($this->emptyInput()==false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalid_user_id()==false){
            header("location: ../index.php?error=username");
            exit();
        } 
        if($this->invalid_email()==false){
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->invalid_password_match()==false){
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->user_id_taken_check()==false){
            header("location: ../index.php?=useroremailtaken");
            exit();
        }

        $this->set_user($this->user_id, $this->password ,$this->email);
    }
    private function emptyInput(){
        if (empty($this->user_id) || empty($this->email) || empty($this->password) || empty($this->password_repeat)){
            $result=false;
        } else {
            $result=true;
        }
        return $result;
    }
    private function invalid_user_id(){
        if (!preg_match("/^[a-zA-Z0-9]'*/", $this->user_id)){
            $result=false;
        } else {
            $result=true;
        }
        return $result;
    }
    private function invalid_email(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        } else {
            $result=true;
        }
        return $result;
    } 
    private function invalid_password_match(){
        if ($this->password !== $this->password_repeat){
            $result=false;
        } else {
            $result=true;
        }
        return $result;
    }

    private function user_id_taken_check(){
        if (!$this->check_user($this->user_id, $this->email)){
            $result=false;
        } else {
            $result=true;
        }
        return $result;
    }
    
}