<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add your blog</title>
    <link rel="stylesheet" href="css/formStyle.css"/>

</head>
<body>
    <aside>
        <h2>Welcome <?php echo $_SESSION['login'] ?></h2>
    </aside>

    <nav class="navBars">
        <ul>
            <li><a href="Jenny-phase2.php">Go back to homepage</a></li>
            <li><a href="viewBlog.php">Go to blog page</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <form method="post" action="addEntry.php">
        <fieldset>
            <legend>Comment form</legend>
            <label>Blog title: </label>
            <input type="text" id="post-title" name="post-title"><br>
            <label>Blog content: </label>
            <input type="text" id="post-content" name="post-content"><br>
            <button id="clear-btn""> Clear</button>
            <!-- <button id="clear-btn" onclick="confirm_clear()"> Clear</button> -->
            <button type="submit" id="submit-btn" name="submit">Submit</button>
        </fieldset>
    </form>
    <?php $pic = "image/pat3.webp"; ?>
    <img id="patrick2" src="<?php echo $pic;?>">

<script>
    var title = document.getElementById('post-title')
    var content = document.getElementById('post-content')
    var clear = document.getElementById('clear-btn').addEventListener('click',confirm_clear)
    var submit = document.getElementById('submit-btn').addEventListener('click',isBlank)
    var warningTimeout;
    var warningBox = document.createElement("div"); 
    warningBox.className = "warning";


    //the message box to make sure the user want to clear the textboxes
    function confirm_clear(evt){
        let clear_var = confirm("Are you sure you want to discard the changes?");
        if (clear_var == true){
            title.value = "";
            content.value = "";
        }
        else{
            evt.preventDefault();
        }
    }

    //check if the texboxes are blank
    function isBlank(evt){
        let blank = ""
        if (title.value.length == 0 && content.value.length == 0){ 
            evt.preventDefault();
            displayWarning("Please fill in the title and content.", "allBlank");
        }
        else if(title.value.length == 0){
            evt.preventDefault(); 
            displayWarning("Blog title cannot be blank.", "titleBlank");
        }
        else if(content.value.length == 0){
            evt.preventDefault(); 
            displayWarning("Blog content cannot be blank.", "contentBlank");
        }
        return true;
    }

    //display notification if textboxes are blank
    function displayWarning(msg,blank) {
        warningBox.innerHTML = msg;
        if (document.body.contains(warningBox)) {
            window.clearTimeout(warningTimeout);
        } 
        else {
            if (blank=='allBlank'){
                content.parentNode.insertBefore(warningBox, content.nextSibling);
                title.style.border="2px solid #E55B3C"
                content.style.border="2px solid #E55B3C"
            }
            else if(blank=='titleBlank'){
                title.parentNode.insertBefore(warningBox, title.nextSibling);
                title.style.border="2px solid #E55B3C"
            }
            else if(blank=='contentBlank'){
                content.parentNode.insertBefore(warningBox, content.nextSibling);
                content.style.border="2px solid #E55B3C"
            }
        }
        //set the appearing time of the warning box
        warningTimeout = window.setTimeout(function() {
            warningBox.parentNode.removeChild(warningBox); title.style.removeProperty('border'); content.style.removeProperty('border')
            warningTimeout = -1;
        }, 2000);
    }
</script>


</body>
</html>