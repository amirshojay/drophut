<?php
session_start();
require('header.php');
$admin_btn = '<a href="http://elevarbetensys.se/SY20/SA20/responsvie/admin/admin.php" style="text-decoration: none;
  color: black;
  font-size: 20px;
  display: block;
  cursor: pointer;
  border: none;
  border-radius:5px;
  padding:5px;
  background-color:lightgreen;
  position:fixed;
  bottom:0;
  right:0">Admin</a>';
if(isset($_SESSION['admin'])){
    echo $admin_btn;
}
?>
    
    <div id="myCarousel" class="carousel slide carousel-fade">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        
        <div class="carousel-item active" data-interval="3000">
          <div class="overlay-image"  style="background-image: url('img/851655.jpg');"></div>
          <div class="container containe-slider">
            <h1>Sneakers</h1>
            <p>Follow Drophut Kicks for updates on upcoming sneakers and sneaker release dates for 2021.</p>
            
          </div>
        </div>
        <div class="carousel-item " data-interval="3000">
          <div class="overlay-image"  style="background-image: url('img/bg2.jpg');"></div>
          <div class="container containe-slider">
            <h1>Jackets</h1>
            <p>There’s no need to tone down a great outfit with a dull jacket. Step out in style and turn heads with our edit of coats and jackets.</p>
            
          </div>
        </div>
        <div class="carousel-item " data-interval="3000">
          <div class="overlay-image"  style="background-image: url('img/newback.jpg'); background-position:bottom"></div>
          <div class="container containe-slider">
            <h1>Training clothes</h1>
            <p>Whether you’re a regular gym-goer or just starting out, our edit of women’s gym wear has all the kit you need to get ahead.</p>
            
          </div>
        </div>
      </div>
      <a href="#myCarousel" class="carousel-control-prev" data-slide="prev" role="button">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a href="#myCarousel" class="carousel-control-next" data-slide="next" role="button">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
    
    <div class='container my-3'>
        <a href="#" style="font-size:20px;color:black" class="category">Sneakers <i class="fas fa-arrow-right" style="font-size:15px"></i></a></br>
        <div class="row sneakers">
            
  
    <?php
    
    require_once('include/db.inc.php');
        $sql = "SELECT * FROM shopping_sneakers LIMIT 4;";
        $connection = mysqli_connect("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
        $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    
    ?>
                    <div class='col-lg-3 colm-md-4 col-sm-6 my-3'>
                        <div class='card' style=''>
                            <div class='card-header'>
                            <img src='img/<?php echo $row['product_image']; ?>' alt='' class='card-img-top' width='300px' height='200px'>
                            </div>
                                <div class='card-body'>
                                    <form action="shop/shop.php?to=add&id=<?php echo $row['id']; ?>" method="post" target="iframe_cartname">
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
    <a href="#" style="font-size:20px;color:black"  class="category">Jackets <i class="fas fa-arrow-right" style="font-size:15px"></i></a></br>
    <div class="row sneakers">
  
    <?php
    
    require_once('include/db.inc.php');
        $sql = "SELECT * FROM shopping_jackets LIMIT 4;";
        $connection = mysqli_connect("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
        $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    
    ?>
                    <div class='col-lg-3 colm-md-4 col-sm-6 my-3'>
                        <div class='card' style=''>
                            <div class='card-header'>
                            <img src='img/<?php echo $row['product_image']; ?>' alt='' class='card-img-top' width='300px' height='200px'>
                            </div>
                                <div class='card-body'>
                                    <form action="shop/shop.php?to=add&id=<?php echo $row['id']; ?>" method="post" target="iframe_cartname">
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
    <a href="#" style="font-size:20px;color:black" class="category">Trousers <i class="fas fa-arrow-right" style="font-size:15px"></i></a></br>
    <div class="row sneakers">
  
    <?php
    
    require_once('include/db.inc.php');
        $sql = "SELECT * FROM shopping_trousers LIMIT 4;";
        $connection = mysqli_connect("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
        $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    
    ?>
                    <div class='col-lg-3 colm-md-4 col-sm-6 my-3'>
                        <div class='card' style=''>
                            <div class='card-header'>
                            <img src='img/<?php echo $row['product_image']; ?>' alt='' class='card-img-top' width='300px' height='200px'>
                            </div>
                                <div class='card-body'>
                                    <form action="shop/shop.php?to=add&id=<?php echo $row['id']; ?>" method="post" target="iframe_cartname">
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
    <a href="#" style="font-size:20px;color:black"  class="category">T-shirts <i class="fas fa-arrow-right" style="font-size:15px"></i></a></br>
    <div class="row sneakers">
  
    <?php
    
    require_once('include/db.inc.php');
        $sql = "SELECT * FROM shopping_tshirts LIMIT 4;";
        $connection = mysqli_connect("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
        $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    
    ?>
                    <div class='col-lg-3 colm-md-4 col-sm-6 my-3'>
                        <div class='card' style=''>
                            <div class='card-header'>
                            <img src='img/<?php echo $row['product_image']; ?>' alt='' class='card-img-top' width='300px' height='200px'>
                            </div>
                                <div class='card-body'>
                                    <form action="shop/shop.php?to=add&id=<?php echo $row['id']; ?>" method="post" target="iframe_cartname">
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
    <iframe onload="updateQuantity();delay();" name="iframe_cartname" style="display:none"></iframe>
    <iframe id="iframe" src="test.php" style="display:none"></iframe>
    </div>
    <script>
    const element = document.querySelectorAll('.category');
        element.forEach(el => el.addEventListener('mouseenter',()=>{
                el.querySelector('.fas').style.transform='translateX(10px)';
                el.querySelector('.fas').style.transition='0.3s ease';
        }))
        element.forEach(el => el.addEventListener('mouseleave',()=>{
                el.querySelector('.fas').style.transform='translateX(0px)';
        }))
    </script>

<?php

require_once('footer.php');

?>