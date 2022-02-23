<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php session_start();

include('dbconnect.php');

if(isset($_POST['login']));
{
    $user_unsafe=$_POST['username'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli($con,$user_unsafe);
    $pass = mysqli($con,$pass_unsafe);

    $query=mysqli_query($con,"mysql:host=localhost;dbname=appelsapgenieters', 'root' ,'root'")or die(mysqli_error($con));

    $row=mysqli_fetch_array($query);

         $name=$row['username'];
         $counter=mysqli_num_rows($query);
         $id=$row['id'];

         if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
            document.location='login.php'</script>";
         }
         else
         {
            $_SESSION['id']=$id;
            $_SESSION['username']=$name;

            echo "<script type='text/javascript'>document.location='index.php'</script>";
         }

}

include('database dbconnect .php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=login.php">';
     echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
     echo '<span class="itext">Logging out please wait!...</span>';

?>
   
</body>
</html>