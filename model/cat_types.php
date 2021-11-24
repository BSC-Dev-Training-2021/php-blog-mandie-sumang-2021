<?php 
	require_once 'model.php';
	
	class cat_types extends model{
		function __construct(){
            parent::__construct("category_types");
        }
	
	 public function dataEdit($data){
        $this->update($data);
    }
}
	//  function getDataEdit($data){
    //     $this->update($data);
    // }
    //  function getDataDelete($data){
    //     $this->delete($data);
	// }

	// 	if(isset($_POST['edit_but'])){
	// 		$nav_name = "Edit";
	// 		$nav ="warning";
	// 		$nav_bttn = "edit_final_bttn";
	// 		$name_value = $_POST['name'];
	// 		$id_value = $_POST['id'];
			
	// 	}
	// 	if(isset($_POST['edit_final_bttn'])){
	
	// 		$data = array(
	// 			'name' => $_POST['name']
	// 		);
	// 		$_SESSION['id_category'] = $_POST['id'];
	// 		$categoriesData = new categories();
	// 		$categoriesData->getDataEdit($data);
	// 	}
	// 	if(isset($_POST['delete_but'])){
	// 		$data = array(
	// 			'id' => $_POST['id']
	// 		);
	// 		$categoriesData = new categories();
	// 		$categoriesData->getDataDelete($data);
	// 	}
   
 ?>