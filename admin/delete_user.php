<?php include_once '../includes/user.php'; ?>
<?php
$userModel = new user();
$userModel->delete($_GET['user_id']);
header("location:users.php");
?>
