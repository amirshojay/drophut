<?php

if(isset($_POST['submit_add'])){
    $image = $_FILES['product_image'];
    
    $image_name= $image['name'];
    $image_error = $image['error'];
    $image_tmp = $image['tmp_name'];
    $image_size = $image['size'];
    $image_type = $image['type'];
    
    $table_name = $_POST['table_name'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    
    
    $image_ext = explode('.', $image_name);
    $image_extension = strtolower(end($image_ext));
    $allowed = ['jpg','jpeg','png'];
    if(in_array($image_extension,$allowed)){
        
        if($image_size<5000000){
            
            if($image_error===0){
                
                $image_new_name = uniqid('',true).'.'.$image_extension;
                $image_destination = '../img/'.$image_new_name;
                move_uploaded_file($image_tmp,$image_destination);
                echo "Done";
                
                
            }else{
                echo "There was an error 32";
            }
            
        }else{
            echo "The file size is too big";
        }
        
    }else{
        echo "Wrong type of file";
    }
    
    require_once'../include/db.inc.php';
    
    $new_query = new Database("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
    $new_query->add_product($table_name,$product_name,$product_price,$image_new_name);
    
    
    
}else if(isset($_POST['submit_delete'])){
    
    $table_name = $_POST['table_name'];
    $product_id = $_POST['id'];
    
    require_once'../include/db.inc.php';
    
    $new_query = new Database("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
    $new_query->delete_product($table_name,$product_id);
    
}else{
    header("Location: ../index.php");
    exit();
}


?>