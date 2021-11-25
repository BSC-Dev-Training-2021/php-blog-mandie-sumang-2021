<?php 


$blogpost_obj= new blog_post();
$blogpost_cate= new blogpost_cat();

if (isset($_REQUEST['submit_post'])) {
  $checkbox=$_REQUEST['checkbox'];
    
    
    $title=$_REQUEST['title'];
    $description=$_REQUEST['description'];
    $content = $_REQUEST['content'];

    $postToInsert = array(
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'created_by' => 1,
        'created' => date("Y-m-d H:i:s")
        
       
    );
    $blogpost_obj->insertPost($postToInsert);
    
    $return_id=$blogpost_obj->id;

    foreach($checkbox as $value){
      
        $dataToinsert = array(
            'blog_post_id'=> $return_id,
            'category_id' => $value

        );
        
        $blogpost_cate->insertPost($dataToinsert);
    
  

    }
    
       
    
   
 

}
    

               




  ?>