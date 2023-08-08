<?php
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];
$comfirmpassword = $_POST['comfirm-password'];

//Database connection

$conn =  mysqli_connect("localhost","root","root","FootballAccount");

if(mysqli_connect_errno()){
  die("Connection error: ". mysqli_connect_error());
}


$query="select * from registration where email='$email'";
$result=mysqli_query($conn,$query);
$count= mysqli_num_rows($result);
if($count>0){

  echo '<script type = "text/javascript">alert("Email is already in use try another one")</script>';

  echo '<script> location.href="signup-page.html"; </script>' ;


}
else{


if($password===$comfirmpassword){

$sql = "INSERT INTO registration (firstName, lastName, email, password) VALUES ('$firstName','$lastName','$email','$password')";

$res = mysqli_query($conn,$sql);

if($res){


  

  echo '<script type = "text/javascript">alert("Account successfully created, You will be redirected to login page")</script>';

  echo '<script> location.href="loginpage.html"; </script>' ;

}else{
  echo "Some error";
}
}else{



 
  

  echo '<script type = "text/javascript">alert("Failure to sign-up due to mismatch passwords, Try again")</script>';


  echo '<script> location.href="signup-page.html"; </script>' ;

  
 
}

}







?>


