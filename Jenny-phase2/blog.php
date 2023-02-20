<?php

session_start();

//if the status is login, redirect to addPost page
if(isset($_SESSION['login'])){
    header("location: addPost.php"); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/formStyle.css"/>
</head>
<body>
    <h2 id="Blog">Login to write a blog</h2>

    <nav class="navBars">
        <ul>
            <li>>&nbsp&nbsp<a href="Jenny-phase2.php"> Go back to homepage</a></li>
        </ul>
    </nav>

    <div class="blog">
        <form method="POST" action="login.php">
            <fieldset>
                <Legend>Login form</Legend>
                <label>Email:</label>
                <input type="email" name="Username" required><br>
                <label>Password: </label>
                <input type="password" name="Password"><br>
                <input type="submit" name='submit' id="btn">
            </fieldset>
        </form>
        <?php $pic = "image/pat2.gif"; ?>
        <img id="patrick" src="<?php echo $pic;?>">
    </div>
</body>
</html>