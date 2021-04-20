<?php
session_start();

if(isset($_POST['submit-add'])){
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if(!in_array($_GET["id"], $item_array_id))
                {
                $count = count($_SESSION["cart"]);
                $integer_temp = (int)htmlspecialchars($_POST['quantity']);
                    if($integer_temp > 0){
                        $item_array = array(
                        'product_id' => $_GET["id"],
                        'item_name' => $_POST["product_name"],
                        'product_price' => $_POST["product_price"],
                        'product_image' => $_POST["product_image"],
                        'item_quantity' => $integer_temp
                        );
                        $_SESSION["cart"][$count] = $item_array;
                    }
                    else{
                        echo "<script>function alertFunction() {alert('Wrong format.');} alertFunction();</script>";
                    }
                }
            else
                {
                echo "<script>function alertFunction() {alert('This item has already been added.');} alertFunction();</script>";
                }
        }else{
        $item_array = array(
        'product_id' => $_GET["id"],
        'item_name' => $_POST["product_name"],
        'product_price' => $_POST["product_price"],
        'product_image' => $_POST["product_image"],
        'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][0] = $item_array;
        $count = count($_SESSION["cart"]);
        }
        
}elseif(isset($_SESSION['cart'])){
    $count = count($_SESSION["cart"]);
}elseif(!isset($_SESSION['cart'])){
}
?>