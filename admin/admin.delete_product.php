<?php


session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../index.php");
    exit();
}

require_once('../header.php');
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
  font-family:Times New Romans">Admin</a>';
    echo $admin_btn;

?>

<form action="admin.upload.php" method="POST"  class="needs-validation"  enctype="multipart/form-data" novalidate style="margin-top:100px">
          
          <div class="container mt-3 p-3" style="width:50vw;border: 2px solid black;border-radius:5px;box-sizing:border-box;">
            <h1 style="margin-bottom:1rem"> Delete product</h1>
            <div class="form-group">
          <input type="text" name="table_name" placeholder="Category" class="form-control" required>
          <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
          <input type="text" name="id" placeholder="Product's id" class="form-control" required>
          <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <button type="submit" name="submit_delete" class="btn btn-primary btn-lg" required>Delete</button>
          </div>
      </form>
        
        
              <script>
      // Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
        
        
<?php


require_once('../footer.php');




?>