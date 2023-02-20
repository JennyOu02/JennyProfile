<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenny Ou</title>
    <link rel="stylesheet" href="css/style.css"/>
<//link rel="alternative stylesheet" href="reset.css"/>
</head>
<body>
    <?php
    $profpic = "image/bg.webp";
    ?>
    <header style="background-image: linear-gradient(rgba(0, 0, 0, 0.596),rgba(7, 21, 61, 0.842)), url('<?php echo $profpic;?>');">
        
        <table class="iconTable">
            <tr>
                <td><img id="icon" src="image/coding.png" alt="Jenny Ou"></td>
                <td><h1 id="myName">Jenny Ou</h1></td>
            </tr>
        </table>

        <!-- navigation bars -->
        <nav class="navBars">
            <ul>
                <li><a href="#About Me">About Me</a></li>
                <li><a href="#Education">Education</a></li>
                <li><a href="#Skills">Skills</a></li>
                <li><a href="#Experience">Experience</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#Contact">Contact</a></li>
                <!-- <li><a href="blog.php">Login</a></li> -->

                <?php 
                if(isset($_SESSION['login'])){ ?>
                    <li><a href="viewBlog.php">Blog</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li style="color: white">Welcome <?php echo $_SESSION['login'] ?></li>
                <?php } 
                else{ ?>
                    <li><a href="blog.php">Login</a></li>
                <?php } ?>

            </ul>
        </nav>

        <!-- About myself -->
        <article class="aboutMyself">
            <h2 id="aboutMe">About Me</h2>
            <hr>
            <p id="about_p">
                I am a student who studies Creative Computing in Queen Mary University London.
                I am an international student from Taiwan. 
                I love to travel, explore different cultures and take photos along the way. 
                I love to do some sports, read books, hang out with friends in my free time. 
                Good articles / books / films / series excite me. 
                I sometimes get my inspiration from galleries, museums or newspaper. 
                I would like to be an IT consultant or something similar in the future. 
                I would love to interact with people more than just do pure computing.
            </p>
        </article>

        <img id="profilePic" src="image/profilePic.png">

        <aside class="scrollDown">
            Scroll down to get to know me more....
        </aside>
    </header>

    <nav class="mid-part">
        <!-- Education + Skills -->
        <div class="education">
            <!-- Education + Experience -->
            <h2 id="Education">Education</h2>
            <hr>
            <table>
                <tr>
                    <td>2017 - 2018</td>
                    <td>National Tainan Girl's Senior High School</td>
                </tr>
                <tr>
                    <td>2018 - 2021</td>
                    <td>The college of Richard Collyer's</td>
                </tr>
                <tr>
                    <td>2021 - NOW</td>
                    <td>Queen Mary University of London</td>
                </tr>
            </table>
        </div>

        <aside class="skills">
            <h2 id="Skills">Skills</h2>
            <hr>
            <li>Python</li>
            <li>C++</li>
            <li>SQL</li>
            <li>Processing</li>
            <li>Java</li>
            <li>HTML</li>
        </aside>

    </nav>
    
    
    <div class="experience">
        <h2 id="Experience">Experience</h2>
        <hr>
        <label>Part-time / internship</label>
        <table>
            <tr>
                <th>Position</th>
                <th>Company</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Interactive producer</td>
                <td>360Fashion Network</td>
                <td>Oct 2021 - Mar 2022</td>
            </tr>
            <tr>
                <td>Virtual internship</td>
                <td>360Fashion Network</td>
                <td>Jul 2021 - Aug 2021</td>
            </tr>
            <tr>
                <td>Summer speaker</td>
                <td>MAX private educational institution</td>
                <td>Jul 2020</td>
            </tr>
        </table>
        <hr>
        <label>Volunteering</label>
        <table>
            <tr>
                <td>Jul 2018 - Aug 2018</td>
                <td>Genesis Social Welfare Foundation</td>
            </tr>
        </table>
        <hr>
        <label>Events</label>
        <table>
            <tr>
                <td>Toastmasters club</td>
                <td>Member / speaker</td>
                <td>May 2020 - August 2020</td>
            </tr>
        </table>
    </div>
    <div class="portfolio">
        <h2 id="Portfolio">Portfolio</h2>
        <hr>
        <table>
            <tr>
                <td>SEM A - ECS427U | Professional and Research Practice</td>
                <td>SEM A - DEN126 | Design Studio</td>
            </tr>
            <tr>
                <td><img src="image/ppt.png" width="400" height="250"></td>
                <td><img src="image/DENproj.jpg" width="400" height="550"></td>
            </tr>
        </table>
    </div>

    <footer>
        Instagram
        Facebook
        LinkedIn
        © Jenny Ou
    </footer>
</body>
</html>
