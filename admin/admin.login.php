<?php

require_once('../header.php');




?>
      
      
      <form action="admin.inc.login.php" method="POST"  class="needs-validation" novalidate style="margin-top:100px">
          
          <div class="container mt-3 p-3" style="width:50vw;border: 2px solid black;border-radius:5px;box-sizing:border-box;">
            <h1 style="margin-bottom:1rem">Log in as admin</h1>
            <div class="form-group">
          <input type="text" name="username" placeholder="Enter your username" class="form-control" required>
          <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
          <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
          <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-lg" required>Log in</button>
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