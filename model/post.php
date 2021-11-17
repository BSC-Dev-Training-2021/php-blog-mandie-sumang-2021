<?php
class Post {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }


    public function findAllPosts(){
        $this->db->query('SELECT * FROM blog_post BY created ASC');

        $result = $this->db->resultSet();

        return $result;
    }
}
?>