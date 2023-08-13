<?php
class dbh {
    protected function connect(){
        try{
            $username= "root";
            $password="";
            $dbh= new PDO('mysql:host=localhost;dbname=login_app', $username, $password);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error!:" . $e->getMessage()."<br/>";
            die();
        }
    }
}
?>