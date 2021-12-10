<?php
require('../controllers/cartController.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $goaway = delete_order_controller($id);
    if($goaway === true){
        header("Location: ../admin/orders.php"); 
      }
      else{
          echo "Could not delete";
      }
  
    
}



?>