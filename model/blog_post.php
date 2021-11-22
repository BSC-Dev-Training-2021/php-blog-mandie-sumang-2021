<?php
require_once 'model.php';
require_once 'blogpost_cat.php';

    class blog_post extends model {

        function __construct(){
            parent::__construct("blog_post");
        }

        function viewPost()
        {
        $blogdata_obj= new blog_post();
        $results=$blogdata_obj->findAll();

        }
       

    }
    
?>