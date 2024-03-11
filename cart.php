<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Your Cart</title>
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
        padding: 0px 5% 50px;
    }
    .fa-solid i{
        color: black;
        font-size: 35px;
        text-align: left;
    }
    .heading{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 10px;
        color: #000;
        text-align: center;
        margin-top: 110px;
    }

    .row-main{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        align-items: center;
        margin-top: 3rem;
        color: #000;
        border-top: 2px solid #000;
        text-align: center;
    }
    .row-main p{
        font-family: 'Spectral SC', serif;
        color: black;
        font-size: 20px;
        line-height: 20px;
        margin-bottom: 1rem;
        padding: 10px 0 20px 0;
    }
    .row-main_1{
        display: flex;
        color: #000;
        border-top: 2px solid lightblue;
        text-align: center;
        margin-left: 20px;
        padding: 15px 0 15px 0;
        align-items: center;
    }
    .row-main_1 p{
        font-family: 'Spectral SC', serif;
        font-size: 20px;
        line-height: 10px;
        text-align: center;
    }
    .sub-row1{
        width: 270px;
    }
    .sub-row2{
        width: 40px;
        margin-left: 190px;
    }
    .sub-row3{
        width: 80px;
        margin-left: 290px;
    }
    .sub-row4{
        width: 270px;
        margin-left: 180px;
    }
    .sub-row5{
        border: #da9100 0.5px solid;
        border-radius: 5px;
        width: 30px;
    }
    .sub-row5 a{
        font-size: 20px;
        color: #da9100;
        background-color: white;
        font-weight: 600;
    }
    .placeorder{
        padding: 10px 33% 50px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(0px, auto));
        align-items: right;
        gap: 2rem;
        margin-top: 3rem;
        color: #000;
        border-top: 2px solid #000;
        text-align: center;
    }
    .placeorder p{
        font-family: 'Spectral SC', serif;
        color: black;
        font-size: 20px;
        line-height: 10px;
        margin-bottom: 1rem;
        padding: 10px 0 20px 0;
    }
    .pord {
        background-color: #da9100;
        border: none;
        color: white;
        padding: 10px 4px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: -1px 0px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-family: 'special Elite',serif;
    }

    .pord:hover {
        background-color: #FFAA00;
    }
    .extra{
        background: white;
        height: 100px;
    }

    .about-us{
        padding: 115px 19% 70px;
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
        font-size: 6rem;
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
    .scroll-bttn i{
        position: fixed;
        right: 2.2rem;
        bottom: 2.2rem;
        color: var(--text-color);
        background: var(--main-color);
        font-size: 23px;
        padding: 9px;
        border-radius: 0.8rem;
    }
    </style>
</head>
<body>
<form method="POST" action="cart.php">
    <!--header1 section-->
    <header class="sticky1">
        <a href="#" class="logo"><img src="logo_1.png"></a>
        <div class="fa-solid  fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about-us">About us</a></li>
        </ul>
    </header>

    <!--cart heading section-->
    <section>
        <div class="heading">
            You are About to Wine
        </div>

        <div class="row-main">
            <div><p>Product</p></div>
            <div><p>Quantity</p></div>
            <div><p>Price</p></div>
            <div><p>Sub Total</p></div>
        </div>
<?php
    $con=mysqli_connect('localhost','root','',"wine");
    $select="select * from cart";
    $query1=mysqli_query($con,$select);

    while($row=mysqli_fetch_array($query1))
    {
        $id = $row['id'];
    ?>
        <div class="row-main_1">
            <div class="sub-row1"><p><?php echo"$row[p_nm]";?></p></div>
            <div class="sub-row2"><p><?php echo"$row[p_qty]";?></p></div>
            <div class="sub-row3"><p><?php echo"$row[p_pr] $";?></p></div>
            <div class="sub-row4"><p><?php echo"$row[subtotal] $ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></p></div>
            <div class="sub-row5">
                <form action="cart.php" method="get">
                    <button class="b b1" name="submit" type="submit"><a href="del.php?deleteid=<?php echo $id;?>">X</a></button>
                </form>
            </div>
        </div>
    <?php
    }
    $tot = mysqli_query($con, 'SELECT SUM(subtotal) AS total FROM cart');
    $row = mysqli_fetch_assoc($tot);
    $gt = $row['total'];
    ?>
    </section>

    <section class="placeorder">
        <div><p><?php echo"Total to Pay :- &nbsp;&nbsp;&nbsp; $gt $";?></p></div>
        <a href="add-dtl.php"><div class="pord">Place Order</div></a>
    </section>

</form>
<!--about-us section-->
<section class="about-us" id="about-us">
    <div class="extra">
        hello white
    </div>
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

    <!--scroll btn -->
    <a href="#" class="scroll-bttn"><i class="fa-solid fa-chevron-up"></i></a>

</body>
</html>