<?php
class signup extends dbh{
    protected function set_user($user_id, $password, $email){
        $stmt = $this->connect()->prepare('INSERT INTO users(users_user_id, users_password, users_email) VALUES (?,?,?);');
        $hashed_password= password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($user_id, $hashed_password, $email))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt=null; 
    }

    protected function check_user($user_id, $email){
        $stmt = $this->connect()->prepare('SELECT users_user_id FROM users WHERE users_email = ? OR users_email = ?;');
        if(!$stmt->execute(array($user_id, $email))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed2");
            exit();
        }
        if ($stmt->rowCount()>0){
            $result_check = false;
        } else {
            $result_check= true;
        }
        return $result_check;

    }
}

?>