<?php
class login_contr extends login{
    private $user_id;
    private $password;
    public function __construct($user_id, $password){
        $this->user_id=$user_id;
        $this->password=$password;
    }
    public function login_user(){
        if($this->emptyInput()==false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->get_user($this->user_id, $this->password);
    }
    private function emptyInput(){
        if (empty($this->user_id) || empty($this->password)){
            $result=false;
        } else {
            $result=true;
        }
        return $result;
    }
    
}

?>