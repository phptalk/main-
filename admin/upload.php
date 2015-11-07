<?php include_once '../includes/admin_header.php'; ?>
<?php include_once '../includes/photo.php'; ?>
<?php
if(isset($_POST['submit'])){
    if($_FILES['file']['error']==0){
        $photoModel = new photo();
        $photoModel->fileName = $_FILES['file']['name'];
        $photoModel->tmp_name = $_FILES['file']['tmp_name'];
        $photoModel->caption = $_POST['caption'];
        $result = $photoModel->upload();
        
        if($result){
            $message_sucess = "File uploaded successfuly";
        } else {
            $message_error = "File upload error";
        }
    } else {
       $message_error = "Error"." ".$_FILES['file']['error']; 
    }
}
?>
<h1 class="page-header">
    Manage Photos
</h1>

<div>
    <form class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Upload Photo</h2>  
        <?php if(isset($message_sucess)){echo "<div class='alert alert-success'>$message_sucess</div>";} ?>
        <?php if(isset($message_error)){echo "<div class='alert alert-danger'>$message_error</div>";} ?>
        <label for="inputEmail" class="sr-only">Upload</label>
        <input type="file" class="form-control" name="file">
        <br>
        <label for="inputEmail" class="sr-only">Caption</label>
        <input type="text" class="form-control" name="caption" placeholder="caption">
        <br>
        <input class="btn btn-primary" type="submit" value="Upload" name="submit"/>
      </form>
</div>