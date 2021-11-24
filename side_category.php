<?php 

?>

  <body>
      <!-- Categories widget-->
      <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row"> <?php 
 
                                    $category_types = new cat_types();
                                    $cats = $category_types->findAll(); 
                                    // $filterCats = $category_types->findByCategory();

                                    foreach ($cats as $values) {
                                
                                 ?>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="index.php"><?php echo $values['name']; ?></a></li>
                                </div>
                                <?php } ?>
                        </div></div>
                    </div>


                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
  