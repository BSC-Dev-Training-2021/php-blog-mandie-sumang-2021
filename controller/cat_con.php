<?php

$name = "";
$id = "";   

function dataEdit($data){
    $this->update($data);
}

if(isset($_POST['edit_butt'])){
    
    $name = $_POST['name'];
    $id = $_POST['id'];
    $editbut = 'updateBut';



}
if(isset($_POST['updateBut'])){
    $data = array(
        'name' => $_POST['add_cat']
    );
    $_SESSION['id_cat'] = $_POST['id'];
    $catdatas = new cat_types();
    $catdatas->dataEdit($data);
}







?>