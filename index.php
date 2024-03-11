<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
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
        padding: 28px 4%;
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
        color: black;
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
        padding: 120px 19% 100px;
    }
    .home{
        position: relative;
        min-height: 100vh;
        width: 100%;
        background: url(bg1.png);
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .hero-text h3{
        font-family: 'Caveat', cursive;
        color: var(--second-color);
        font-size: 60px;
        font-weight: 600;
        text-align: left;
        margin-left: 16px;
    }
    .hero-text h4{
        font-family: 'Caveat', cursive;
        color: var(--second-color);
        font-size: 60px;
        font-weight: 600;
        text-align: left;
    }
    .hero-text h1{
        font-family: 'Caveat', cursive;
        font-size: 150px;
        color: var(--text-color);
        font-weight: 800;
        letter-spacing: 2px;
    }
    header.sticky{
        padding: 15px 4%;
        background: white;
    }
    .our-story{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        align-items: center;
        gap: 9rem;
    }
    .os-img img{
        width: 100%;
        height: auto;
        border-radius: 15%;
    }
    .our-story h2{
        font-family: 'Caveat', cursive;
        font-size: var(--h2-font);
        font-weight: 800;
        margin-bottom: 10px;
        color: #000;
    }
    .our-story h5{
        font-family: 'Special Elite', serif;
        font-size: 22px;
        margin-bottom: 20px;
        line-height: 1.4;
        color: #000;
    }
    span{
        font-family: 'Special Elite', serif;
        color: black;
    }
    .our-story p{
        font-family: 'Spectral SC', serif;
        color: black;
        font-size: var(--p-font);
        line-height: 30px;
        margin-bottom: 3rem;
    }
    .text-center{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 10px;
        color: #000;
        text-align: center;
    }
    .history{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, auto));
        align-items: center;
        gap: 4rem;
        text-align: right;
        margin-top: 4rem;
    }
    .h-left-text h4{
        font-size: 22px;
        color: var(--main-color);
        font-family: 'Special Elite', serif;
        text-align: right;
    }
    .h-left-text h2{
        font-size: 32px;
        color: black;
        text-align: right;
        font-family: 'Special Elite', serif;
    }
    .h-left-text p{
        font-size: 22px;
        color: black;
        text-align: right;
        font-family: 'Spectral SC', serif;
    }

    .h-right-text h4{
        font-size: 22px;
        color: var(--main-color);
        font-family: 'Special Elite', serif;
        text-align: left;
    }
    .h-right-text h2{
        font-size: 32px;
        color: black;
        text-align: left;
        font-family: 'Special Elite', serif;
    }
    .h-right-text p{
        font-size: 22px;
        color: black;
        text-align: left;
        font-family: 'Spectral SC', serif;
    }
    .shop-p1{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, auto));
        align-items: center;
        gap: 4rem;
        margin-top: 2rem;
        color: #000;
        }
    .img{
        align-items: center;
        padding: 10px 10px 10px 10px;
    }
    .img:hover{
        border: #da9100 3px solid;
        border-radius: 10px;
    }
    .img img{
        width: 70%;
        height: 70%;
        align-items: center;
    }
    /*paper2*/
    .img h2{
        font-family: 'Special Elite', serif;
        gap: 5rem;
        text-align: center;
        padding: 7% 0;
        font-size: 30px;
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
        margin-bottom: 80px;
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



@media(max-width:1600px) {
    header{
        padding: 14px 4%;
    }header.sticky{
        padding: 8px 4%;
    }
   
}
@media(max-width:1300px){
    header{
        padding: 14px 5%;
    }
    header.sticky{
        padding: 8px 5%;
    }
}
@media(max-width:1185px){
    header{
        padding: 10px 2%;
    }
    header.sticky{
        padding: 4px 2%;
    }
}

@media(max-width:1185px){
    #menu-icon{
        display:block;
    }
    .navlist{
        position: absolute;
        top: -800px;
        right: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        background: #000;
        padding: 20px 0;
        text-align: left;
        transition: all .50s ease;
    }
    .navlist a{
        display: block;
        font-size: 22px;
        padding: 12px 0;
    }
    .navlist.open{
        top: 100%;
        background-color: #fff;
    }
}
</style>
</head>
<body>
    <!--header section-->
    <header class="sticky">
        <a href="#" class="logo"><img src="logo_1.png"></a>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#our-story">Our Story</a></li>
            <li><a href="#wine-story">Wine Story</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="#about-us">About us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>

    <section class="home" id="home">
            <div class="hero-text">
                <h3>Dear</h3>
                <h1>Wine</h1>
                <h4>You Are Mine</h4>
            </div>
    </section>

    <!--header section-->
    <section class="our-story" id="our-story">
        <div class="os-img">
            <img src="ourstory3.jpg">
        </div>
        <div class="os-text">
            <h2>Our Story</h2>
            <h5>We are from semcom collage <span>Selling Wine</span></h5>
            <p>We areWe are from semcom collage We are from semcom collage We are from semcom collage We are from semcom collage We are from semcom collage from semcom collageWe are from semcom collage We are from semcom collage</p>
        </div>
    </section>

    <!--history section-->
    <section class="wine-story" id="wine-story">
        <div class="text-center">Learn More About Wine</div>
        <div class="history">
            <div class="h-left-text">
                <h4>1971</h4>
                <h2>First Production</h2>
                <p>It is very important for the customer to be aware of the customer's needs, but the time has come</p>
            </div>

            <div class="h-middle-img">
                <img src="history1.png">
            </div>

            <div class="h-right-text">
                <h4>1985</h4>
                <h2>WHITE WINE</h2>
                <p>It is very important for the customer to be aware of the customer's needs, but the time has come</p>
            </div>
        </div>

        <div class="history">
            <div class="h-left-text">
                <h4>1990</h4>
                <h2>RED WINE</h2>
                <p>It is very important for the customer to be aware of the customer's needs, but the time has come</p>
            </div>

            <div class="h-middle-img">
                <img src="history2.png">
            </div>

            <div class="h-right-text">
                <h4>1997</h4>
                <h2>ROSE WINE</h2>
                <p>It is very important for the customer to be aware of the customer's needs, but the time has come</p>
            </div>
        </div>

        <div class="history">
            <div class="h-left-text">
                <h4>2008</h4>
                <h2>VINTAGE WINE</h2>
                <p>It is very important for the customer to be aware of the customer's needs, but the time has come</p>
            </div>

            <div class="h-middle-img">
                <img src="history3.png">
            </div>

            <div class="h-right-text">
                <h4>1919</h4>
                <h2>LAST PRODUCTION</h2>
                <p>It is very important for the customer to be aware of the customer's needs, but the time has come</p>
            </div>
        </div>
    </section>

    <!--part2-->
    <!--shop section-->
    <section class="shop" id="shop">
        <div class="text-center">Take Your Type of Wine</div>
        <a href="sparkling.php">
        <div class="shop-p1">
            <div class="img">
                <img src="sparkling_final.png">
                <h2>Sparkling Wine</h2>
            </div>
            <div class="img">
                <img src="red_final.png">
                <h2>Red Wine</h2>
            </div>
            <div class="img">
                <img src="desert_final.png">
                <h2>Desert Wine</h2>
            </div>
        </div></a>
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

    <!--scroll btn -->
    <a href="#" class="scroll-bttn"><i class="fa-solid fa-chevron-up"></i></a>

<script src="https://unpkg.com/scrollreveal"></script>

<!--coustom js file link -->
<script src="home1.js"></script>
</body>
</html>