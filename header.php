<?php
session_start();
require('shop/shop.php');
?>
<!doctype html>
<html lang="en" onload="updateQuantity();delay()">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script defer src="https://kit.fontawesome.com/cbf727a347.js" crossorigin="anonymous"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://elevarbetensys.se/SY20/SA20/responsvie/script.js"></script>
    <title>Welcome</title>
    <style>
    html{
        width:100vw;
        overflow-x:hidden;
    }
    body{
        width:100vw;
        overflow-x:hidden;
    }
    a{
        color:white;
        text-decoration:none!important;
    }
        .carousel-item{
        height: 32rem;
        background-color: #777;
        position: relative;
}
.containe-slider{
        position: absolute;
        color: white;
        left: 0%;
        right: 0;
        bottom: 0;
        padding-bottom: 50px;
}
.overlay-image{
        position: absolute;
        background-color: black;
        left: 0%;
        right: 0;
        bottom: 0;
        top: 0;
        opacity: .9;
        background-position: center;
        background-size: cover;
}
      .nabar{
        background-color: transparent;
}
nav{
        position: fixed;
        width: 100vw;
        height: 10vh;
        background-color: transparent;
        display: flex;
        justify-content: space-around;
        align-items: center;
        z-index: 11;
        padding:5px;
        transition: 1s ease all;
}
.logo{
        color: white;
}
.list-div{
        width: 40%;
        position:relative;
        top:15%;
}
.list{
        list-style-type: none;
        color:white;
        display: flex;
        justify-content: space-around;
      }
.display-4{
        color:white;
        font-size: 2rem;
}
.nav-change{
        background-color: black;
        opacity: 0.7;
      }
      .burger{
          cursor:pointer;
          display:none;
      }
      .line{
          width:25px;
          height:3px;
          background-color:white;
          right:40px;
          margin-bottom:4px;
      }
      @media screen and (max-width:768px){
        .burger{
        display:block;s
        }
        .list-div{
            position:absolute;
            right:0;
            top:10vh;
            width:50%;
            height:90vh;
            background-color:black;
            opacity:0.9;
            transform:translateX(100%);
            transition-duration:1s;
            display:flex;
            justify-content:space-around;
        }
        .list{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        .card-img-top{
            width:150px;
            height:150px;
        }
      }
      .reveal{
        transform:translateX(0%);
      }
      .containerrr {
  border: 2px solid black;
  border-radius: 5px;
  text-align: center;
  padding: 30px;
  margin: 30px;
    }
.itemrrr {
  text-decoration: none;
  color: black;
  font-size: 20px;
  display: block;
  cursor: pointer;
  border: 1px solid black;
  padding: 10px;
  border-radius: 5px;
    }
    .card-header{
        padding:0;
    }
    .category:hover{
        .fa-arrow-right{
        transform:translateX(10px);
        transition:0.3s ease;
    }
    }
        
    </style>
    
  </head>
  <body>
    <nav id="nav">
      <div class="logo-div">
          <a href="http://elevarbetensys.se/SY20/SA20/responsvie/index.php"><h3 class="display-4">Drophut</h3></a>
      </div>
      <div class="list-div">
        <ul class="list">
          <li class="item"><a href="http://elevarbetensys.se/SY20/SA20/responsvie/index.php"  style="color:white">Home</a></li>
          <li class="item"><a href="http://elevarbetensys.se/SY20/SA20/responsvie/contact.php"  style="color:white">Contact</a></li>
          <li class="item">About</li>
          <li class="item">Settings</li>
        </ul>
      </div>
      <div>
          <a href="http://elevarbetensys.se/SY20/SA20/responsvie/shop/checkout.php" style="color:white"><i class="fas fa-shopping-bag" style="font-size:25px"> <span id="updatedQuantity" class="badge badge-light" style="font-size:13px"></span></i></a>
      </div>
      <div class="burger" onclick="nav_reveal()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
      </div>
      
    </nav>