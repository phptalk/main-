<?php
require_once 'database.php';

class comment{
    public $comment_id;
    public $photo_id;
    public $comment;
    public $created;
    public $email;
    
    public function addComment(){
        $this->created = date("Y-m-d h:i:s");
        $database = new database();
        $query = "insert into comment (photo_id, comment, created, email)
                  values('$this->photoId', '$this->comment', '$this->created','$this->email')";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    public function fetchAllComments($photo_id){
        $database = new database();
        $query = "select * from comment where photo_id='$photo_id'";
        $database->performQuery($query);
        $comment = $database->fetchAll();
        return $comment ? $comment : FALSE;
    }
    public function delete($photo_id){
        $database = new database();
        $query = "delete from comment where photo_id = '$photo_id'";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    public function fetchAll(){
        $database = new database();
        $query = "select * from comment";
        $database->performQuery($query);
        return $database->fetchAll();
    }
}
?>
