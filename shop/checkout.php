<?php
session_start();
include_once('header.php');
?>


        <div class="container" style="width:100vw;margin:10px">
        <div class="row" style="width:100vw;display:flex;justify-content:center;">
        <div class="col-md-8">
        <table style="margin-top:100px" class="table table-striped">
            <thead>
    <tr>
        <th>Image</th>
        <th>Product Name:</th>
        <th>quantity:</th>
        <th>Price:</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $value){
        $totalamount = $totalamount + ($value["item_quantity"]);
        $totalcost = $totalcost + ($value["item_quantity"] * $value["product_price"]);
    ?>
    <tr>
        <td><img src="../img/<?php echo $value['product_image']?>" alt='' width='50px' height='50px'></td>
        <td><?php echo $value['item_name']; ?></td>
        <td><?php echo $value['item_quantity']; ?></td>
        <td><?php echo $value['product_price']; ?>kr</td>
    <?php } }else{echo "The cart is empty";}?>
    </tr>
    <tfoot>
        <tr>
            <th colspan="2">Total</th>
            <td><?php echo $totalamount; ?> pcs</td>
            <td><?php echo $totalcost; ?> kr</td> 
        </tr>

    </tfoot>
    </tbody>
    </table>
    <a href="empty.php?to=empty" style="color:black;font-size:20px;font-weight:bold">Empty the cart?</a>
    </div>
    <div class="col-md-3"  style="margin-top:100px;">
    <div class="row">
    
        <?php
    
    require_once('../include/db.inc.php');
        $sql = "SELECT * FROM shopping_sneakers LIMIT 4;";
        $connection = mysqli_connect("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
        $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    
    ?>
    <div class='col-12 my-3'>
                        <div class='card mr-3' style=''>
                            <div class='card-header'>
                            <img src='../img/<?php echo $row['product_image']; ?>' alt='' class='card-img-top'>
                            </div>
                                <div class='card-body'>
                                    <form action="http://elevarbetensys.se/SY20/SA20/responsvie/shop/shop.php?to=add&id=<?php echo $row['id']; ?>" method="post" target="iframe_cartname">
                                    <h4 class='card-title'><?php echo $row['product_name']?></h4>
                                    <p class='card-text'><?php echo $row['product_price']?>kr</p>
                                    <input type="number" min="1" max="99" name="quantity" id="quantity" style="margin-bottom:1rem;max-width:50%" class="form-control" value="1">
                                    <h6 class='card-text text-danger' style="<?php if(!isset($_SESSION['admin'])){echo 'display:none';} ?>">product id : <?php echo $row['id']?></h6>
                                    <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"></input>
                                    <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"></input>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"></input>
                                    <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"></input>
                                    <button type="submit" name="submit-add" class='btn btn-primary'>Add to cart</button>
                                    </form>
                                </div>
                        </div>
                        </div>
    
    <?php
                }
            }
    ?>
    
    </div>
    </div>
    </div>
    </div>
<?php

require('../footer.php');

?>