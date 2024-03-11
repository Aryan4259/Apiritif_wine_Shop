<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Add Details</title>
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
    .register{
        text-align: center;
    }
    .heading{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 3rem;
        color: #000;
        text-align: center;
        margin-top: 50px;
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
        width: 140px;
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
<form method="POST" action="add-dtl.php">
    <!--header1 section-->
    <header class="sticky1">
        <a href="#" class="logo"><img src="logo_1.png"></a>
        <div class="fa-solid  fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="#about-us">About us</a></li>
        </ul>
    </header>

    <section class="register" id="register">
        <div class="heading">
            Add Details
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>User Name : </p></div>
            <div class="ip2-mobile"><?php
                                    $last=null;
                                    $con=mysqli_connect('localhost', 'root','',"wine");
                                    $select="select * from user";
                                    $qry=mysqli_query($con,$select);
                                    $n=mysqli_num_rows($qry);
                                            $i=1;
                                            while ($row = mysqli_fetch_array($qry))
                                            {
                                                if($i==$n)
                                                    $last=$row['u_nm']?>
                                                    <p><?php echo $last; ?></p>
                                                    <?php
                                                $i++;
                                            }
                                    ?>
            </div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Mobile Number : </p></div>
            <div class="ip2-mobile"><?php
                                    $last=null;
                                    $con=mysqli_connect('localhost', 'root','',"wine");
                                    $select="select * from user";
                                    $qry=mysqli_query($con,$select);
                                    $n=mysqli_num_rows($qry);
                                            $i=1;
                                            while ($row = mysqli_fetch_array($qry))
                                            {
                                                if($i==$n)
                                                    $last=$row['m_no']?>
                                                    <p><?php echo $last; ?></p>
                                                    <?php
                                                $i++;
                                            }
                                    ?>
            </div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Country : </p></div>
            <div class="ip2-mobile"><input type="text" name="country"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>State : </p></div>
            <div class="ip2-mobile"><input type="text" name="state"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>City : </p></div>
            <div class="ip2-mobile"><input type="text" name="city"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Pincode : </p></div>
            <div class="ip2-mobile"><input type="text" name="pincode"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Address : </p></div>
            <div class="ip2-mobile"><input type="text" name="add"></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><a href="bill.php"><p><input class="submit_in" type="submit" name="addbtn" value="Add Details"></p></a></div>
        </div>
    </section>

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
if(isset($_POST['addbtn']))
{
    $country1=$_POST['country'];
    $state1=$_POST['state'];
    $city1=$_POST['city'];
    $pincode1=$_POST['pincode'];
    $add1=$_POST['add'];

    $con=mysqli_connect('localhost','root','',"wine");
    $select="select * from user";
    $qry=mysqli_query($con,$select);

    $lastname=null;
    $mobileno=null;
    $pass=null;
    $n=mysqli_num_rows($qry);
    $i=1;
    while ($row = mysqli_fetch_array($qry))
    {
        if($i==$n)
        $lastname=$row['u_nm'];
        $mobileno=$row['m_no'];
        $pass=$row['psw'];
        $i++;
    }

    $update="UPDATE user SET country='$country1',sta='$state1',city='$city1',pincode='$pincode1',addr='$add1' WHERE u_nm='$lastname'";
    $qry1=mysqli_query($con,$update);
    if($qry1)
    {
        header('Location: http://localhost/WINE_/bill.php');
        exit;
    }
}
?>