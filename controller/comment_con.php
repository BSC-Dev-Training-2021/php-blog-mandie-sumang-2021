<?php 


$comment_post= new comment();

if (isset($_REQUEST['but_comment'])) {
    
        
    $comment=$_REQUEST['text_comment'];
    $userCom= '1';
    $id_post = $_REQUEST['id'];

    $commentToInsert = array(
        'comment' => $comment,
        'user_id' => $userCom,
        'blog_post_id' => $id_post,
        
        'created' => date("Y-m-d H:i:s")
        
      
 
    );  

    $comment_post->insertPost($commentToInsert);


   $return_id=$comment_post->id;
        
//     foreach ($checkbox as $value) {

//         $setdata= array(
//             'blog_post_id'=> $return_id,
//             'category_id'=> $value
//         );
//          $blogpost_cat->insertPost($setdata);
//     }
}?>