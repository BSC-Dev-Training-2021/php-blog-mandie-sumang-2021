<?php include 'header.php';
include 'model/cat_types.php';
require_once 'model/model.php';
require_once 'controller/cat_con.php';

?>

        <!-- Responsive navbar-->
     
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7 align-self-start">
                    <div class="row">
                        <div class="col-lg-9">
                            <!-- Contact Us header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Add Category</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">We would like to hear from you!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-2">
                            <?php
                           $add_cat= new cat_types();

                           if (isset($_REQUEST['addCatBut'])) {
                               
                                   
                               $catAdd=$_REQUEST['add_cat'];
                               
                               $catToInsert = array(
                                   'name' => $catAdd,

                               );  
                           
                               $add_cat->insertPost($catToInsert);
                           
                           
                              $return_id=$add_cat->id;
                           }
                          
                            ?>
                                   
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="mb-1">Category</label>
                                        <input type="text" class="form-control mb-1" id="formGroupExampleInput" placeholder="" name="add_cat" 
                                        value="<?php echo $name;?>">
                                        <input type="hidden" class="form-control mb-1" id="formGroupExampleInput" placeholder="" name="id" 
                                        value="<?php echo $id;?>">
                                    
                                    <button type="submit" class="btn btn-primary mt-2" name="addCatBut">Add</button>
                                    <button type="submit" class="btn btn-primary mt-2" name="updateBut">Update</button></div>
                                    
                                    <br>
                                    <table style="text-align:center" class="table" ><thead class="table-light">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                        
                                        </tr>
                                    </thead>
                                    </form>
                                    <?php 
                      

                                    $blogpost_obj=new cat_types();
                                    $result=$blogpost_obj->findAll();
                                    foreach ($result as $datas) {
                                            
                                    ?>

                                   
                                    <form method="POST">
                                    <tbody>
                                        <tr>
                                        <th scope="row" value="<?php echo $datas['id']; ?>"><?php echo $datas['id']; ?></th>
                                        <td value="<?php echo $datas['id']; ?>"><?php echo $datas['name']; ?></td>
                                        <input type="hidden" name="id" value="<?php echo $datas['id']; ?>">
                                        <input type="hidden" name="name" value="<?php echo $datas['name']; ?>">
                                        <td><button type="submit" name="edit_butt" class="btn-sm btn-success"> Edit </button>
                                            <button type="submit" name="delete_butt" class="btn-sm btn-danger">Delete</button>
                                        
                                        </tr>
                                        
                                        </form>
                                        <?php 
                            }?>
                                       
                                    </tbody>
                                    </table>
                          
                                
                             
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
                    <!-- Categories widget-->
                    <?php include 'side_category.php';?>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include 'footer.php';?>
        <!-- Bootstrap core JS-->
     