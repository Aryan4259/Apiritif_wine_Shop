<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Sparkling Wine</title>
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
        --p-font: 1.1rem;
    }
    body{
        color: white;
    }
    header{
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: transparent;
        padding: 28px 11%;
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
        margin: 0 40px;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
    }
    .navlist a:hover{
        color: var(--main-color);
    }
    section{
        padding: 0px 8% 50px;
    }
    .heading{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 10px;
        color: #000;
        text-align: center;
        margin-top: 150px;
    }
    .spark1{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        align-items: center;
        gap: 2rem;
        margin-top: 3rem;
        color: #000;
    }
    .p{
        align-items: center;
        width: 100%;
        height: auto;
    }
    .p img{
        width: 100%;
        height: auto;
        align-items: center;
    }
    .p h2{
        font-family: 'Special Elite', serif;
        gap: 5rem;
        text-align: center;
        padding: 2% 0;
        font-size: 25px;
    }
    .p h5{
        font-family: 'Spectral SC', serif;
        text-align: center;
        font-size: 20px;
    }
    header.sticky{
    padding: 15px 11%;
    background: white;
    }
    .extra{
        background: white;
        height: 100px;
    }

    .about-us{
        padding: 80px 19% 70px;
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
    .back-btn i{
        position: fixed;
        left: 2rem;
        top: 8rem;
        color: var(--text-color);
        background: var(--main-color);
        font-size: 23px;
        padding: 9px;
        border-radius: 0.8rem;
    }
    </style>
</head>
<body>
     <!--header section-->
    <header class="sticky">
        <a href="#" class="logo"><img src="logo_1.png"></a>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="#about-us">About us</a></li>
        </ul>
    </header>

    <!--sparkling section-->
    <section class="shop">
        <div class="heading">
            Sparkling Wine
        </div>
        <div class="spark1">
            <div class="p">
                <a href="cremant.php"><img src="cremant.jpg"></a>
                <h2>Cremant de bordeaux</h2>
                <h5>25$</h5>
            </div>
            <div class="p">
                <a href="prosecco.php"><img src="prosecco.jpg"></a>
                <h2>Prosecco ITALIA</h2>
                <h5>25$</h5>
            </div>
            <div class="p">
                <a href="rose.php"><img src="rose.jpg"></a>
                <h2>Nyetimber Rose</h2>
                <h5>25$</h5>
            </div>
            <div class="p">
                <a href="champagne.php"><img src="champagne.jpg"></a>
                <h2>Veuve Clicquot Brut</h2>
                <h5>25$</h5>
            </div>
        </div>
    </section>

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
    <a href="index.php" class="back-btn"><i class="fa-solid fa-less-than"></i></a>

    <script src="https://unpkg.com/scrollreveal"></script>

    <!--coustom js file link -->
<script src="sparkling1.js"></script>
</body>
</html>