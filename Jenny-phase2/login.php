<?php

session_start();

//if the status is login, redirect to addPost page
if(isset($_SESSION['login'])){
    header("location: addPost.php"); 
}
?>

<?php

//connecting db
$con= mysqli_connect('127.0.0.1',"root","");
if(!$con){
  die('Connection failed: '. mysqli_error($con));
}
  
mysqli_select_db($con,'ecs417');
$sql = "SELECT * FROM `user`";          
$result = mysqli_query($con,$sql);

//if connection failed
if(!$result){
  printf("Error:". mysqli_error($con));
  exit();
}



$givenemail = $_REQUEST["Username"];
$givenpassword = $_REQUEST["Password"];
$row_length = mysqli_num_rows($result);

//check if login details are correct
for($i = 0;$i < $row_length; $i++){
  $row = mysqli_fetch_assoc($result);
  $email = $row["userName"];
  $password = $row["password"];


  //redirect to different pages based on the checked result
  if(($givenemail==$email)&&($givenpassword==$password)){
    $_SESSION['login'] = $email;
    header("location: http://127.0.0.1/Jenny-phase2/addPost.php");
  }
  else{
    header("location: http://127.0.0.1/Jenny-phase2/blog.php");
  } 
} 

?>
