<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); 
    
   }
   else{
     echo "<div id="."f1".">";
    echo "Username="; echo $_SESSION['username']; echo"<br>";
    echo "Password="; echo $_SESSION['password'];
  echo "</div>";
   }

   
?>
<html>
    <head>
        <style type="text/css">
            #d1{
                margin-left: 47%;
                margin-top: 8%;

            }
            button{
                width: 90px;
                height: 50px;
            }

            #f1{
margin-top: 10%;
            text-align: center;
            font-size: 50px;
            color: red;
            }
        </style>
        <title>Admin Page</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <form action="" method="post">
        <div id="d1">
      <button type="submit" name="logout"  class="btn btn-default">Logout</button>
</div>
<?php 
if(isset($_POST['logout'])){
session_start();
session_unset();
session_destroy();
ob_start();
header("LOCATION:login.php");
ob_end_flush(); 
include 'login.php';
exit();

   }

 ?>
</form>
  </body> 
</html>