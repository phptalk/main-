<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/database.php'; ?>
<?php include_once 'includes/photo.php'; ?>
<?php include_once 'includes/comment.php'; ?>
<?php
$databse      = new database();
$photo_id     = $_GET['photo_id'];
$photoModel   = new photo();
$commentModel = new comment();    
$photoSet     = $photoModel->fetchByID($photo_id);
$photoModel   = new photo($photo_id);
if(isset($_POST['submit'])){
    $commentModel->photoId = $_GET['photo_id'];
    $commentModel->email   = $databse->prep($_POST['email']);
    $commentModel->comment = $databse->prep($_POST['comment']);
    $commentModel->addComment();
}
$commentSet=$commentModel->fetchAllComments($_GET['photo_id']);
?>
<?php
//echo '<pre>';print_r($commentSet);
echo "<div class='row'>";
echo "<div><img src=images/".$photoSet[0]['name']." width=100% /> </div>";
echo "</div>";
?>
<div class="row">
    <form action="" method="post">
        <h2 class="form-signin-heading">Add comment</h2>  
        <?php if(isset($message)){echo "<div class='alert alert-danger'>$message</div>";} ?>
        <input type="text" id="inputEmail" class="form-control" placeholder="email" name="email">
        <br>
        <input type="text" id="inputComment" class="form-control" style="height:200px;" placeholder="comment" name="comment">
        <br>
        <input class="btn btn-primary" type="submit" value="Add" name="submit"/>
      </form>
</div>
<hr>
<?php 
if (!empty($commentSet)){
foreach ($commentSet as $comment){
    echo "<h4>".$comment['email']."</h4>";
    echo "<p>{$comment['comment']}</p><hr>";
}
}
?>

<?php include_once 'includes/footer.php'; ?>