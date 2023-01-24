<?php
  include "configer.php";

  if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    echo "good to go";
    $sql ="INSERT INTO new (name, email, pass)
    VALUES('".$name."', '".$email."', '".$pass."')";

    if($conn->query($sql)=== TRUE){
        echo" data row inserted ";
    }
    else{
        echo"fail insert";
    }
  }
 ?>