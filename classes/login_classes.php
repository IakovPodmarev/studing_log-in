<?php
class login extends dbh{
    protected function get_user($user_id, $password){
       $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_user_id = ? OR users_email = ?;');

        $hashed_password= password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($user_id, $user_id))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $password_hashed=$stmt->fetchAll(PDO::FETCH_ASSOC);

        if (Count($password_hashed) == 0){
            $stmt= null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }
        $check_password = password_verify($password, $password_hashed[0]["users_password"]);
        if($check_password==false){
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($check_password==true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_user_id = ? OR users_email = ? AND users_password = ?;');
            if(!$stmt->execute(array($user_id, $user_id, $password_hashed[0]['users_password']))){
                $stmt=null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $login_data=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if (Count($login_data)==0){
                $stmt= null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            session_start();
            $_SESSION['users_id']=$login_data[0]['users_id'];
            $_SESSION['users_user_id']=$login_data[0]['users_user_id'];
            if (!isset($_SESSION['users_id'])){
                $stmt= null;
                header("location: ../index.php?error=sessionnotset");
                exit();
            }
        }
        $stmt=null; 
    }
}

?>