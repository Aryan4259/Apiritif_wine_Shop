<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Veuve Clicquot Brut</title>
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
        padding: 55px 12% 50px;
    }
    .fa-solid i{
        color: black;
        font-size: 35px;
        text-align: left;
    }

    .shop{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        gap: 2rem;
        margin-top: 5rem;
        color: #000;
    }
    .img_1{
        width: 80%;
        height: auto;
        align-items: center;
    }
    .img_1 img{
        width: 100%;
        height: auto;
        align-items: center;
    }
    .detail{
        width: 100%;
        height: auto;
        align-items: left;
    }
    .detail h2{
        font-family: 'Special Elite', serif;
        gap: 5rem;
        padding: 7% 0 0 0;
        font-size: 45px;
    }
    .detail h5{
        font-family: 'Spectral SC', serif;
        font-size: 30px;
        padding: 0 0 5% 0;
    }
    .detail p{
        font-family: 'Spectral SC', serif;
        color: black;
        font-size: 20px;
        line-height: 20px;
        margin-bottom: 1rem;
        padding: 0 0 20px 0;
    }
    #quantity {
    width: 100px;
    padding: 5px;
    font-size: 14px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 3px;
    transition: border-color 0.3s;
}

#quantity:focus {
    border-color: #007bff;
    outline: none;
}
    .add-to-cart {
        background-color: #da9100;
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-family: 'special Elite',serif;
    }

    .add-to-cart:hover {
        background-color: #FFAA00;
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
    header.sticky{
        padding: 15px 11%;
        background: white;
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
<form method="POST" action="champagne.php">
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

    <!--shop section-->
    <section class="shop">
        <div class="img_1">
            <img src="champagne.jpg">
        </div>

        <div class="detail">
            <div class="dtl1"><h2>Veuve Clicquot Brut</h2></div>
            <div class="dtl2"><h5>55$</h5></div>
            <div class="dtl3"><p>One of the most popular Champagnes in the world, Veuve Clicquot is consistently the first rate.<br><br>

            Wine Spectator wrote about Veuve Clicquot Yellow Label Brut "The goal is to make a Champagne that replicates the house style, while also delivering balance, finesse and complexity." Clicquot's chef de cave Dominique Demarville and his team blend up to 500 base wines to make a final cuvee that is as exceptional as it can possibly be.</p></div>

            <div class="quantity">
            <input type="number" id="quantity" name="quantity" min="1" max="10" step="1" value="1"><br><br>

                <button type="submit" class="add-to-cart" name="addcart">
                ADD TO CART
            </button>
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

<?php
    $p_nm='Veuve Clicquot Brut';
    $p_pr=55;
    if(isset($_POST['addcart']))
    {
        $p_qty=$_POST['quantity'];
        $subtotal=$p_qty*$p_pr;

        $con=mysqli_connect('localhost','root','',"wine");
        $insert="insert into cart (p_nm,p_pr,p_qty,subtotal) values('$p_nm','$p_pr','$p_qty','$subtotal')";
        $query1=mysqli_query($con,$insert);
    }
?>
</form>

<!--scroll btn -->
<a href="#" class="scroll-bttn"><i class="fa-solid fa-chevron-up"></i></a>
<a href="sparkling.php" class="back-btn"><i class="fa-solid fa-less-than"></i></a>

<script src="https://unpkg.com/scrollreveal"></script>

<!--coustom js file link -->
<script src="champagne1.js"></script>
</body>
</html>