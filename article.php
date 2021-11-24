<?php include 'header.php';
require_once 'model/comment.php';
require_once 'model/blogpost_cat.php';
require_once 'model/blog_post.php';
require_once 'model/cat_types.php';
require_once 'controller/comment_con.php';
require_once 'model/usertbl.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Post - Start Bootstrap Template</title>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/app.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        
        <!-- Page content-->

        <form action="" method="POST">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                     <?php 
                    require_once 'model/blog_post.php';
                  ;
                    $id = 1;
                    $username = new usertbl();
                    $userId= $username->findById($id);
                  
                   
                    if (isset($_GET['id'])) {
                        $id=$_GET['id'];
                        
                        $post_obj= new blog_post();
                     
                        $find_id_results=$post_obj->findById($id);                    
                        {
                            foreach ($find_id_results as $data){} 
                        }?>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $data['title']; ?></h1>
                            <!-- Post meta content-->

                            <div class="text-muted fst-italic mb-2">Posted on <?php echo $data['created']; ?>  by <?php foreach($userId as $dataId){
                                echo $dataId['name'];
                            }?> </div>
                            <!-- Post categories-->
                           

                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $data['content']; ?> </p>
                       </section>
                       <?php } ?>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4"  action="article.php" method="POST">
                              
                                    <div>
                                        <textarea class="form-control mb-2" rows="3" placeholder="Join the discussion and leave a comment!" name="text_comment"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" name="but_comment">Post Comment</button>
                                    </div>
                                </form>
                               
                                <?php 
                               
                                
                               $id = $_GET['id'];
                               $blogpost_obj=new comment();
                               $result=$blogpost_obj->findIdComment($id);

                               

                               foreach ($result as $data) {
                                   
                               ?>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">
                                       <?php 
                                        echo 'Sumang';
                                 
                                       ?>
                                    </div>
                                    <?php 
                                        echo $data['comment'];
                                          
                                    }    
                                       ?>
                                           
                                        </div> 
                                      
                                   
                            </div>
                        </div>
                    </section>
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
                    <?php include 'side_category.php';?>
                </div></div>
            </div>
        </div>
        <!-- Footer-->
        <?php include 'footer.php';?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
