<?php include 'header.php';
require_once 'model/blog_post.php';
 

?>

   
    <body>
        <!-- Responsive navbar-->
      
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <div class="row">
                    <?php 
                    
                    $blogdata_obj= new blog_post();
                    $results=$blogdata_obj->findAll();
                    $filt = 1;
                     foreach ($results as $data){
                     
                     if ($filt === 1)
                     
                     { ?>
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?php echo $data['created']; ?></div>
                            <h2 class="card-title"><?php echo $data['title']; ?></h2>
                            <p class="card-text"><?php echo $data['description']; ?></p>
                            <form method="get">
                                <a class="btn btn-primary" name="id" href="article.php?id=<?php echo $data['id']; ?> ">Read more →</a>
                                </form>
                        </div>
                    </div>

                    <?php
                    $filt = 0;
                     }
                    else
                    {
                    ?>


                    <div class="col-lg-6">
                     <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?php echo $data['created']; ?></div>
                            <h2 class="card-title"><?php echo $data['title']; ?></h2>
                            <p class="card-text"><?php echo $data['description']; ?></p>
                            <form method="get">
                                <a class="btn btn-primary" name="id" href="article.php?id=<?php echo $data['id']; ?> ">Read more →</a>
                                </form>
                        </div>
                     
                        </div>
                  
                        </div>
                     
                  
                     <?php }} ?>
                    </div>




                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <?php include 'model/cat_types.php'; include 'side_category.php';?>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include 'footer.php';?>
    