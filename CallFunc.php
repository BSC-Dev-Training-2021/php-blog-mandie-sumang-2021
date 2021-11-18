<?php
require_once 'model/blog_post.php';

class view{

        public function viewPost()
        {
        $blogdata_obj= new blog_post();
        $results=$blogdata_obj->findAll();

        }
    }
?>