<?php


 $conn = mysqli_connect("localhost","Sumang","","blog");




    if (isset($_REQUEST["new_post"])){

        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $description = $_REQUEST["description"];
     
        $created_by = "1";
        $created = date("Y-m-d H:i:s");

        $sql = "INSERT INTO blog_post (`content`,`title`,`description`,`created_by`,`created`) 
        VALUES ('$content','$title','$description','$created_by','$created')";
        mysqli_query($conn,$sql);
      }

?>