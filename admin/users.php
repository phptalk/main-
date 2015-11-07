<?php include_once '../includes/admin_header.php'; ?>
<?php include_once '../includes/user.php'; ?>
<?php
$userModel = new user();
if(isset($_POST['submit'])){
    $userModel->username = $_POST['username'];
    $userModel->password = $_POST['password'];
    $userModel->fname    = $_POST['fname'];
    $userModel->lname    = $_POST['lname'];
    $userModel->create();
}
$userSet = $userModel->fetchAll();
?>
<h1 class="page-header">
    Manage Users
</h1>

<div>
    <form class="form-signin" action="users.php" method="post">
        <h2 class="form-signin-heading">Create User</h2>  
        <?php if(isset($message)){echo "<div class='alert alert-danger'>$message</div>";} ?>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="username" name="username">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="password" name="password">
        <br>
        <label for="inputEmail" class="sr-only">First Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="first name" name="fname">
        <br>
        <label for="inputEmail" class="sr-only">Last Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="last name" name="lname">
        <br>
        <input class="btn btn-primary" type="submit" value="Add" name="submit"/>
      </form>
    <br>
    <table class="table table-responsive">
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
            foreach($userSet as $user){
                echo "<tr>";
                echo "<td>{$user['user_id']}</td>";
                echo "<td>{$user['username']}</td>";
                echo "<td><a href='edit_user.php?user_id={$user['user_id']}'>Edit</a></td>";
                echo "<td><a href='delete_user.php?user_id={$user['user_id']}'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</div>
<?php include_once '../includes/admin_footer.php'; ?>

