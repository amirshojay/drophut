<?php 
if(isset($_POST['submit'])){
    $to = "drophut@elevarbetensys.se"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:".$from ;

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2); // sends a copy of the message to the sender
    header('Location: contact.php?status=success');
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script defer src="https://kit.fontawesome.com/cbf727a347.js" crossorigin="anonymous"></script>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

    body{
        height:100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .form{
        height:80vh;
        display:flex;
        flex-direction:column;
        align-self:center;
        padding:5%;
        box-shadow:1px 9px 15px 7px rgba(0,0,0,0.6);
        border:2px solid black;
        border-radius:3px;
    }
    .input{
        padding:10px;
        border:1px solid  black;
        border-radius:3px;
    }
    .button{
        display:flex;
        align-self:center;
        justify-content:center;
        width:30%;
        color:white;
        background-color:black;
        padding:10px;
        border-radius:5px;
        cursor:pointer;
        transition:0.5s ease;
    }
    .button:hover{
        color:black;
        background-color:white;
    }
    textarea {
    resize: none;
    }
    .nav{
        position:absolute;
        background-color:black;
        display:flex;
        justify-content:space-around;
        align-items:center;
        top:0;
        width:100vw;
        height:8vh;
    }
    .nav a {
        color:white;
    }
    .nav li{
        text-decoration:none;
    }
    .logo-div{
        
    }
    
    .list{
        display:flex;
        justify-content:space-between;
        align-items:center;
        color:white;
        list-style-type:none;
        width:40%;
        margin-bottom:0;
    }
    a{
        text-decoration:none;
    }
</style>
</head>
<body>
      <nav class="nav">
      <div class="logo-div">
          <a href="http://elevarbetensys.se/SY20/SA20/responsvie/index.php"><h3 class="display-5">Drophut</h3></a>
      </div>
      <ul class="list">
          <li class="item"><a href="http://elevarbetensys.se/SY20/SA20/responsvie/index.php" style="color:white;text-decoration:none">Home</a></li>
          <li class="item"><a href="http://elevarbetensys.se/SY20/SA20/responsvie/contact.php"  style="color:white;text-decoration:none">Conntact</a></li>
          <li class="item">About</li>
          <li class="item">Settings</li>
      </ul>
      <div>
          <a href="http://elevarbetensys.se/SY20/SA20/responsvie/shop/checkout.php" style="color:white"><i class="fas fa-shopping-bag" style="font-size:25px"> <span id="updatedQuantity" class="badge badge-light" style="font-size:13px"></span></i></a>
      </div>
    </nav>

<form action="" method="post" class="form">
First Name: <input type="text" name="first_name" class="input"><br>
Last Name: <input type="text" name="last_name" class="input"><br>
Email: <input type="text" name="email" class="input"><br>
Message:<br><textarea rows="5" name="message" cols="30" class="input"></textarea><br>
<input type="submit" name="submit" value="Submit" class="button">
<?php
if(isset($_GET['status'])){
    echo "<p>Mail Sent. Thank you " . $_GET['name'] . ", we will contact you shortly.</p>";
}
?>
</form>

</body>
</html> 