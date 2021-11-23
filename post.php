<?php include 'header.php';
require_once 'model/blog_post.php';
require_once 'model/blogpost_cat.php';
require_once 'model/cat_types.php';
require_once 'controller/post_con.php';
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Contact Us header-->
                            <header class="mb-8">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Create a new blog entry</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">Express your mind!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <form action="post.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input type="text" class="form-control mb-1" name='title'>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea class="form-control mb-1" id="exampleFormControlTextarea1" rows="3" name='description'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea class="form-control mb-1" id="exampleFormControlTextarea1" rows="5" name='content'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row">
                                        <?php 

                                        $blogpost_obj=new cat_types();
                                        $result=$blogpost_obj->findAll();
                                        foreach ($result as $datas) {

                                        ?>
                                            <div class="col-lg-6">
                                                <div class="form-check">    
                                                    <input class="form-check-input" type="checkbox" value="<?php echo $datas['id']; ?>" id="checkbox<?php echo $datas['id']; ?>" name="checkbox[]">✔
                                                    <label class="form-check-label" for="checkbox<?php echo $datas['id']; ?>">
                                                      <?php echo $datas['name']; ?>
                                                    </label>
                                                </div>  
                                            </div>

                                              <?php } ?>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-5" name="submit_post">Post</button>
                                </form>
                            </section>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
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
                    
                </div>
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
