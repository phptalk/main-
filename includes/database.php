<?php
require_once 'config.php';
/*
 * @ClassName : MySql Database Class
 * @Description : This Class is Used to perform actions in Mysql DB
 * @Author : Salameh Yasin <talkphp.sam@gmail.com 
 * @copyright  1997-2005 The PHP Talk
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 */
class database{
    public $conn;
    public $lastQuery;
    public $recordSet = array();

    public function __construct() {
        $this->openConnection();
    }

    public function openConnection(){
        $this->conn = mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME);
        if(!$this->conn){
            die("Cannot Connect to Server");
        }else{
            //echo "Connection Established";
        }
    }
    
    public function performQuery($query){
        $this->lastQuery = mysqli_query($this->conn, $query);
//        if($this->lastQuery){
//            return $this->lastQuery;
//        }else{
//            return FALSE;
//        }
        return $this->lastQuery ? $this->lastQuery : FALSE;
    }
    
    public function fetchAll(){        
        while ($row = mysqli_fetch_assoc($this->lastQuery)){
            $this->recordSet[] = $row;
        }
        return !empty($this->recordSet) ? $this->recordSet : FALSE;
    }
    // return last auto increment field from database table
    public function lastInsertedId(){
        return mysqli_insert_id($this->conn);
    }
    public function prep($value){
        return mysqli_real_escape_string($this->conn,$value);
    }
}

//$x = new database();
//$x->performQuery("select * from users");
//$y = $x->fetchAll();
//echo '<pre>';
//print_r($y);

?>