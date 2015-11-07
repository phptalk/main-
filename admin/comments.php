<?php include_once '../includes/admin_header.php'; ?>
<?php include_once '../includes/comment.php'; ?>
<?php
$commentModel = new comment();

$commentSet = $commentModel->fetchAll();
?>
<h1 class="page-header">
    Manage Comments
</h1>

<div>
    <table class="table table-responsive">
        <tr>
            <th>Comment Id</th>
            <th>Photo Id</th>
            <th>Comment</th>
            <th>Delete</th>
        </tr>
        <?php 
            foreach($commentSet as $commentModel){
                echo "<tr>";
                echo "<td>{$commentModel['comment_id']}</td>";
                echo "<td>{$commentModel['photo_id']}</td>";
                echo "<td>{$commentModel['comment']}</td>";
                echo "<td><a href='#'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</div>
<?php include_once '../includes/admin_footer.php'; ?>