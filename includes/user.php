<?php
require_once 'database.php';

class user{
    public $userId;
    public $username;
    public $password;
    public $fname;
    public $lname;
    
    public function fetchAll(){
        $database = new database();
        $query = "select * from users";
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public static function auth($username, $password){
        $database = new database();
        $query = "select * from users where username = '$username' and password = '$password'";
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public function delete($user_id){
        $database = new database();
        $query = "delete from users where user_id = $user_id";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    public function create(){
        $database = new database();
        $query = "insert into users (username, password, first_name, last_name)
                  values('$this->username', '$this->password', '$this->fname','$this->lname')";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
}

?>
