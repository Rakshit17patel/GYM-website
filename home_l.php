<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: home.html");
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akshar Fitness</title>
    <link rel="stylesheet" href="style.css">



</head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">



<body>
    <header class="header">
        <!-- left side logo -->
        <a href="home.html">
            <div class="left">
                <img src="logo.png" alt="">
        </a>
        <h2>Akshar Fitness</h2>
        </div>
        <!-- middle navigation -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="fitness.html">Fitness Calculator</a></li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
        <!-- right side buttons -->
    
        <div class="right">
            <!-- <a href="signup.php"><button class="btn">sign up</button></a>
            <a href="login.php"><button class="btn">Login</button> </a> -->
            <?php echo "<h3 id='user'> Hello " ." ". $_SESSION['username'] . "</h3>"; ?>
            <a href="logout.php"><button class="btn">Logout</button> </a>
            <!-- <button class="btn">CAll Us Now</button> -->
            <!-- <button class="btn">Email Us</button>     -->
            
        </div>
    </header>

    <div class="container">
        <h1>Book your Online Trainer Now</h1>
        <form action="action.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="Enter your City">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group">
                <input type="number" name="number" placeholder="Enter your Phone Number">
            </div>
            <div class="form-group">
            <input type="submit" name="submit" class="button"placeholder="submit">
        </div>
            <div class="form-group">
            <input type="reset" name="reset" class="button" placeholder="reset">
        </div>
       
        </form>
    </div>

</body>

</html>