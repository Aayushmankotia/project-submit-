<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>

</head>
<body>
    <form action="plogin.php" method="POST">
        <fieldset>
         LOGIN  
        </fieldset>
       
        <label for="">E-MAIL
            <input type="email" name="email">
        </label>

        <label for="">PASSWORD
            <input type="password" name="pass">   

        </label>
                <input type="submit" name="submit" value="submit">
                <p> The formaction of the codde is sufficient with the father <em>Tim berner's lee</em> of html.</p> 
    
    </form>

   <?php
   
   include_once "conn.php";

   if (isset($_POST['submit'])){
   $email= $_POST['email'];
    $pass= $_POST['pass'];

    $sql="SELECT * FROM new WHERE email ='$email' AND pass ='$pass' ";
     $result= mysqli_query($conn, $sql);
     $rows= mysqli_num_rows($result);

     if ($rows==1){
        while($rows= mysqli_fetch_array($result)){
            $name=$rows['name'];
            echo "<h1> welcome </h1>";
            echo  $name;
            echo "<br>";
        }
     }
     else{


     }



   }

   
   ?>


    
    
</body>
</html>