<?php

    class model {
       public $table;

       function __construct($tablename= ''){

        $this->table = $tablename; 
        $this->connect();  
    }
       
        private function connect()
        {

        $user="Sumang";
        $pass="";
        $pdo = null;
        $db_name ="blog";
        $this->db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $user, $pass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }

        
        function insert(){
            
            

            if(isset($_POST['new_post'])){
 
                      $title = $_POST['title'];
                      $description = $_POST['description'];
                     $content = $_POST['content'];
                     $created_by = '1';
                      $created = date("Y-m-d H:i:s");
                      
                    
 
                     
                         $sql ="INSERT INTO blog_post ( `content`, `title`,  `created_by`, `created`, `description`) VALUES (?,?,?,?,?)";
                         $stmtinsert = $this->db->prepare($sql);
                         $result = $stmtinsert->execute([$content,$title,$created_by,$created,$description]);
                         $id = $this->db->lastInsertId();
                         header ('location: ../post.php');
                     
    
                       
            }
             
             
         }
         
        
        function findAll($tbl_post){
       
             try {  
            $sql="SELECT * FROM $tbl_post order by id DESC";  
            $q = $this->db->query($sql) or die("Owshiii!");

            while($r = $q->fetch(PDO::FETCH_ASSOC)){  $data[]=$r;  }  
            return $data;

             }
            catch(PDOException $e)
            {
        echo 'Query failed'.$e->getMessage();
            }
            

           
        }
    }
        function findById($id){


        }

        
    

    
    ?>































       