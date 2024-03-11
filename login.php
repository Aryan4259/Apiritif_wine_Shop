<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Login - Wine</title>
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
        list-style: none;
        text-decoration: none;
        scroll-behavior: smooth;
        border: none;
        outline: none;
    }
    :root{
        --bg-color: #191919;
        --secont-bg-color: #101010;
        --main-color: #da9100;
        --text-color: #000;
        --second-color: #000;
        --other-color: #808080;

        --h1-font: 7rem;
        --h2-font: 7rem;
        --p-font: 1.4rem;
    }
    body{
        color: white;
    }
    .sticky1{
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: transparent;
        padding: 20px 19% 10px;
        border-bottom: 1px solid transparent;
        transition: all ease .50s;
    }
    .logo img{
        width: 100%;
        height: 80px;
    }
    .navlist{
        display: flex;
    }
    #menu-icon{
        font-size: 42px;
        color: var(--text-color);
        z-index: 10001;
        cursor: pointer;
        display: none;
    }
    .navlist a{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        margin: 0 0 0 70px;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
        align-items: center;
    }
    .navlist a:hover{
        color: var(--main-color);
    }
    section{
        padding: 100px 35% 50px;
    }
    .fa-solid i{
        color: black;
        font-size: 35px;
        text-align: left;
    }
    .login{
        text-align: center;
        align-items: center;
    }
    .heading{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 3rem;
        color: #000;
        text-align: center;
        margin-top: 140px;
    }
    .log-form{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        align-items: center;
        color: #000;
        text-align: left;
        padding-bottom: 1rem;
    }
    .log-form-btn{
        align-items: center;
        color: #000;
        text-align: center;
        padding: 13PX 0 1rem 0;
    }
    .log-form p{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
        align-items: center;
    }
    .ip2-mobile input{
        border: solid #000;
        align-items: left;
        height: 40px;
        padding: 0 0 0 10px;
    }
    .submit_1 input{
        border: solid #000;
        align-items: left;
        height: 40px;
        width: 100px;
    }
    .submit_in{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
        align-items: center;
    }
    .submit_in:hover{
        cursor: pointer;
    }
    .about-us{
        padding: 200px 19% 70px;
    }
    .about-us-main{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, auto));
        align-items: center;
        gap: 5rem;
        margin-top: 2rem;
        color: #000;
    }
    .text-center-about-us{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 30px;
        color: #000;
        text-align: center;
    }
    .about-us-logo img{
        width: 80%;
        height: auto;
    }
    .about-us-dtl{
        align-items: center;
    }
    .about-us-dtl h5{
        font-family: 'Special Elite', serif;
        font-size: 22px;
        margin-bottom: 20px;
        line-height: 1.4;
        color: #000;
        text-align: center;
    }
    .about-us-dtl p{
        font-family: 'Spectral SC', serif;
        color: black;
        font-size: var(--p-font);
        line-height: 30px;
        margin-bottom: 1rem;
        text-align: center;
    }
    .about-us-img img{
        align-items: center;
        width: 100%;
        height: auto;
    }
    </style>
</head>
<body>
<form method="POST" action="login.php">
    <!--header1 section-->
    <header class="sticky1">
        <a href="#" class="logo"><img src="logo_1.png"></a>
        <div class="fa-solid  fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#login">Login</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="#about-us">About us</a></li>
        </ul>
    </header>

    <section class="login" id="login">
        <div class="heading">
            Login
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Mobile Number : </p></div>
            <div class="ip2-mobile"><input type="text" name="m_no1"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Password : </p></div>
            <div class="ip2-mobile"><input type="password" name="psw1"></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><p><input class="submit_in" type="submit" name="login" value="Login"></p></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><p><a class="submit_in" href="forgot.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php" class="submit_in">New User?</a></p></div>
        </div>
    </section>
    <input type="text" name="m_no">

    <!--about-us section-->
    <section class="about-us" id="about-us">
        <div class="text-center-about-us">About Us</div>
        <div class="about-us-main">
            <div class="about-us-logo">
                <img src="logo_1.png">
            </div>
            <div class="about-us-dtl">
                <h5>Contact Us</h5>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; SEMCOM College</p>
                <p><i class="fa-regular fa-envelope"></i>&nbsp;&nbsp; Krishvirani99@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp; 9924038093</p>
            </div>
        </div>
        <div class="about-us-img">
            <img src="about-us_img.png">
        </div>
    </section>
</form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    $m_no1=$_POST['m_no1'];
    $psw1=$_POST['psw1'];

    $con=mysqli_connect('localhost','root','',"wine");
    $select="select * from user";
    $qry=mysqli_query($con,$select);

    $con1=mysqli_connect('localhost','root','',"wine");
    $del="delete from cart";
    $delque=mysqli_query($con1,$del);

        if($qry)
        {
            while ($row = mysqli_fetch_array($qry))
            {
                $m_no=$row['m_no'];
                $psw=$row['psw'];
                if($m_no1!=$m_no || $psw1!=$psw)
                {
                    $cnt=1;
                }

                else
                {
                    $cnt=2;
                }
            }
        }
            if($cnt==1)
            {
                ?>
                    <script>
                    alert("Invalid Username or Password!");
                    </script>
                <?php
            }
            else if($cnt==2)
            {
                header('Location: http://localhost/WINE_/home.php');
                exit;
            }
}
?>