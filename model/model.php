<?php
    class model {
        
        function __construct($tableName){
            $this->conn = mysqli_connect("localhost", "Sumang", "", "blog");  
               if(!$this->conn)  
               {  
                    echo 'Database Connection Error ' . mysqli_connect_error($this->conn);  
               }
            $this->tableName = $tableName;
            $this->id=0;
        }

        function findAll(){  
                $res=0;
            $sql = "SELECT * FROM $this->tableName";
            $rows = $this->conn->query($sql);
            $result = [];   
            if ($rows->num_rows > 0) {  
            while($row = $rows->fetch_assoc())  { 
            $result[] = $row;
      }
      } 
            return $result;
      }

        function findById($id){

            $sql = "SELECT * FROM $this->tableName where id=$id ";
            $rows = $this->conn->query($sql);
            $find_id_result = [];
            if ($rows->num_rows > 0) {
                // display data from the query
                while($row = $rows->fetch_assoc()) {
                $find_id_result[] = $row; 

}
} 
            return $find_id_result;
            return $find_id_result['id'];




}


    function findIdComment($id){
                                 

    $sql = "SELECT *  FROM $this->tableName where blog_post_id = $id ";
                                
    $rows = $this->conn->query($sql);

    $find_id_result = [];
    if ($rows->num_rows > 0) {
                                  
    while($row = $rows->fetch_assoc()) {
    $find_id_result[] = $row; 
                    
    }
    } 
     return $find_id_result;
     return $find_id_result['id'];
                               
                                
                              
                    
                    
                    
   }
                              


   function insertPost($data){
       
    $dataColumnKeys = [];
    $dataColumnValues = [];
    
    foreach($data as $dataColumnKey => $dataColumnValue){
        $dataColumnKeys[] = $dataColumnKey; 
        $dataColumnValues[] = $dataColumnValue; 
    }
    $sql = mysqli_query($this->conn,"INSERT INTO ".$this->tableName." (".implode(",",$dataColumnKeys).") VALUES ('".implode("','",$dataColumnValues)."')");
    
    if ($sql) {
         $this->id = mysqli_insert_id($this->conn);
    }
}


       

        function update($data)
        {
            foreach ($data as $key => $datas) {
               $columnArr []= $key;
               $dataArr []= $datas;
               $mysql = $this->conn->query("UPDATE $this->tableName SET $key = '" .$datas. "'  WHERE id='".$_SESSION['id_cat']."' ");
            }
        }


        function innerFilt($data)
    {
        $sql="SELECT  bp.id,bp.content,bp.updated,bp.title,bp.description,bp.img_link,bp.created_by,bp.created  FROM blog_post bp 
        INNER JOIN blog_post_categories bpc ON bp.id = bpc.blog_post_id
        INNER JOIN category_types ct ON ct.id = bpc.category_id
        WHERE ct.id= $data" ;
        $run = $this->conn->query($sql);
     
        return $run;
    }
      

}
?>