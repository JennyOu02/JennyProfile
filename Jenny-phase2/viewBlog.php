<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="css/formStyle.css"/>
</head>
<body>
    <nav class="navBars">
            <ul>
                <li><a href="Jenny-phase2.php">Go back to homepage</a></li>
                <li><a href="addPost.php">Go write a blog</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
    </nav>

<?php
    //connecting db
    $con= mysqli_connect("127.0.0.1","root","");
    if(!$con){
        die('Connection failed: '. mysqli_error($con));
    }
    // connection succeeded
    mysqli_select_db($con,'ecs417');
    $sql = "SELECT * FROM blog ORDER BY `blog`.`blogNo` DESC";
    $result = mysqli_query($con,$sql);

    if(!$result){
        printf("Error:". mysqli_error($con));
        exit();
    }

    //fetching blog info
    while($row = mysqli_fetch_array($result)){
        ?>
        <aside>
            <h3><?php echo $row["blogTitle"];?></h3>
            <p><?php echo $row["blogContent"]; ?></p>
            <p> by <?php echo $row["userName"];?> on <?php echo $row["date"];?></p>
            <hr>
        </aside>
        <?php } ?>
        

</body>

<script>
    
</script>

</html>