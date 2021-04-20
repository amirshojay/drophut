<?php


session_start();
require_once('../header.php');
echo $admin_btn;
if(!isset($_SESSION['admin'])){
    header("Location: ../index.php");
    exit();
}
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
  right:0;
  font-family:Times New Roman">Admin</a>';
  echo $admin_btn;
?>
<div class="containerrr" style="margin-top:100px">
    <a href="../index.php" class="itemrrr">Home page</a><br>
    <a href="admin.add_product.php" class="itemrrr">Add product</a><br>
    <a href="admin.delete_product.php" class="itemrrr">Delete product</a><br>
    <a href="logout.php" class="itemrrr">Log out</a>
</div>
<?php
 require_once('../footer.php');
?>