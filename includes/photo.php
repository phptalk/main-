<?php
require_once 'database.php';
class photo {
    public $photoId;
    public $fileName;
    Public $caption = "";
    public $created;
    public $userId;
    public $tmp_name;
    public $path = "../images/";

    public function upload(){
        $result = move_uploaded_file($this->tmp_name, $this->path.$this->fileName);
        return $result ? $this->create () : FALSE;
    }
    public function create(){
        $this->created = date("Y-m-d h:i:s");
        $database = new database();
        $query = "insert into photo (name, caption, created)
            values('$this->fileName', '$this->caption', '$this->created')";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    public function fetchAll(){
        $database = new database();
        $query = "select * from photo";
        $database->performQuery($query);
        return $database->fetchAll();
    }
   public function fetchPagination($limit, $offset){
        $database = new database();
        $query = "select * from photo limit $limit offset $offset";
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public function fetchByID($photo_id){
        $database = new database();
        $query = "select * from photo where photo_id ='$photo_id'";
        $result = $database->performQuery($query);
        return $photoSet = $database->fetchAll();
    }
    public function imageCount(){
        $database = new database();
        $query = "select count(*) as count   from photo";
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public function delete($photo_id){
        $database = new database();
        $query = "delete from photo where photo_id = $photo_id";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    
}
?>