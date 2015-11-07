<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/photo.php'; ?>
<?php 
$photoModel = new photo();
$imageCount = $photoModel->imageCount();
$imageCount = $imageCount[0]['count'];
$perPage = 4;
$totalPages = $imageCount / $perPage;
if(!isset($_GET['page'])){
    $_GET['page'] = 1;
}
$offset = ($_GET['page'] - 1) * $perPage;
$photoSet = $photoModel->fetchPagination($perPage, $offset);
?>
<div class="row">
<?php
foreach ($photoSet as $photoModel) {
    echo "<div class='col-md-3'>
          <a href=single.php?photo_id=".$photoModel['photo_id']."><img src=images/".$photoModel['name']." class='thumbnail' width='250px' height='170px' /></a>
         </div> ";
    
}
?>
</div>
        <!-- Pagination -->
        <div class="row text-center">
          
            
            <div class="col-lg-12">
                <ul class="pagination">
                    <?php
                    if ($_GET['page']!=1){
                    echo "<li>
                        <a href='index.php?page=1'>&laquo;</a>
                    </li>";                        
                    }
                    ?>

                    <?php
                    for($i=1;$i<=$totalPages;$i++){
                        echo "<li><a href='index.php?page=$i'>$i</a></li>";
                    }
                    ?>
                    <?php
                    if ($_GET['page']!=$totalPages){
                    echo "<li>
                        <a href='index.php?page={$totalPages}'>&raquo;</a>
                    </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->
<?php include_once 'includes/footer.php'; ?>
        