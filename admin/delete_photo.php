<?php include_once '../includes/photo.php'; ?>
<?php include_once '../includes/comment.php'; ?>
<?php
$photoModel = new photo();
$photoModel->delete($_GET['photo_id']);
unlink("../images/".$_GET['name']);
$commentModel = new comment();
$commentModel->delete($_GET['photo_id']);
header("location:photo.php");
?>
