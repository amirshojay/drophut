<?php

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $conn = mysqli_connect("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
    $sql = 'SELECT * FROM admin WHERE username = ? and password = ?;';
    
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"ss",$username,$password);
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);
    
    if($row=mysqli_fetch_assoc($resultData)){
        session_start();
        $_SESSION["id"]=$row["id"];
        $_SESSION["admin"]=$row["username"];
        header("location:admin.php");
        exit();
    }else{
        echo "Incorrect username or password";
        
    }
}else{
    echo "Log in first";
}




?>