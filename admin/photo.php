<?php include_once '../includes/admin_header.php'; ?>
<?php include_once '../includes/photo.php'; ?>
<?php
$photoModel = new photo();

$photoSet = $photoModel->fetchAll();
?>
<h1 class="page-header">
    Manage Photos
</h1>

<div>
    <table class="table table-responsive">
        <tr>
            <th>Photo Id</th>
            <th>Photo Name</th>
            <th>Photo Thumb</th>
            <th>Photo Caption</th>
            <th>Delete</th>
        </tr>
        <?php 
            foreach($photoSet as $photoModel){
                echo "<tr>";
                echo "<td>{$photoModel['photo_id']}</td>";
                echo "<td>{$photoModel['name']}</td>";
                echo "<td><img src=../images/".$photoModel['name']." class='thumbnail' width='150px' height='150px' /></td>";
                echo "<td>{$photoModel['caption']}</td>";
                echo "<td><a href='delete_photo.php?photo_id={$photoModel['photo_id']}&name={$photoModel['name']}'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</div>
<?php include_once '../includes/admin_footer.php'; ?>