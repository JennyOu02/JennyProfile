<?php 

session_start(); 

//if session is not set then redirect to Login Page
if(!isset($_SESSION['login'])) 
{
    header("location: blog.html");  
}
    echo $_SESSION['login'];
    echo "Login Success";
    echo "<a href='logout.php'> Logout</a> "; 

?>

<?php

//connecting db
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecs417";

$conn = mysqli_connect($servername , $username, $password, $dbname);

// Checks connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


date_default_timezone_set('Europe/London');

//get the post records
if(isset($_POST['submit']))
{
    $postTitle = $_POST['post-title'];
    $postContent = $_POST['post-content'];
    $date = date('y-m-d h:i:s');


    //database insert SQL code
    $sql = "INSERT INTO `blog` (`blogTitle`, `blogContent`, `userName`, `date`) VALUES ('$postTitle', '$postContent', '$_SESSION[login]', '$date')";

    // insert in database 
    $rs = mysqli_query($conn, $sql);

    if($rs)
    {
        echo "Contact Records Inserted";
        header ("location: http://127.0.0.1/Jenny-phase2/viewBlog.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
    
}


?>