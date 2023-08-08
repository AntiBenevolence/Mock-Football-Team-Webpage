<?php
$email = $_POST['email'];
$password = $_POST['password'];

//Database connection

$conn =  mysqli_connect("localhost","root","root","FootballAccount");

if(mysqli_connect_errno()){
  die("Connection error: ". mysqli_connect_error());
}

$query="select * from registration where email='$email' and password='$password'";
$result=mysqli_query($conn,$query);
$count= mysqli_num_rows($result);
if($count>0){

  echo '<script type = "text/javascript">alert("Login Successfully")</script>';

  echo '<script> location.href="homepage.html"; </script>' ;

}
else{

  echo '<script type = "text/javascript">alert("Login Not Successful: Account Does Not Exist")</script>';

  echo '<script> location.href="loginpage.html"; </script>' ;
  
}
