<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Grape+Nuts&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lobster&family=Madimi+One&family=Pacifico&family=Russo+One&family=Sigmar&display=swap');
    body{
      width: 100vw;
     }
    #acc{
        background-color: rgb(2, 2, 44);
        text-align: right;
        padding: 5px 90px 5px 0px;
       
    }
    #acc a{
      text-decoration: none;
      color: black;
      margin-right: 8px;
     
    }   
    #acc a:visited{
        color: white;
    }
    #menu{
        background-color: rgba(173, 173, 194, 0.233);
        padding: 0px 0px 25px 0px;
      
    }
    #menuint{
        text-align: center;
    }
    #menu a{
        text-decoration: none;
        color: black;
        padding: 8px 8px 8px 8px;
        border-radius: 6px;
    }
    #about{
        background-color: rgb(2, 2, 44);
    }
    #about:visited{
        color: white;
    }
    #icon1{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: relative;
        left: 80px;
        top: 25px;
    }
    #title{
        position: relative;
        left: 150px;
        top: 15px;
        font-family: "Madimi One", sans-serif;
       font-weight: 400;
       font-size: 250%;
    }
    #iconcrt{
        width: 30px;
        border-radius: 50%;
        margin-left: 1200px;
        position: relative;
        bottom: 35px;
    }
    #mode{
        width: 32px;
        border-radius: 50%;
       position: relative;
       bottom: 35px;
       left: 1200px;
       
    }
    #aboutprg{
        width: 500px;
        padding: 0px 50px;
        margin-left:auto ;
        margin-right: auto;
    }
    #first0{
        font-size: 300%;
        color: rgba(24, 24, 63, 0.829);
        text-align: center;
    }
    #first1{
       padding: 10px;
       border-radius: 10px;
       background-color: rgb(17, 85, 161);
       color: white;
    }
    #first2{
        color: rgb(68, 65, 65);
        font-size: 150%;
    }
   
    #gml{
        text-decoration: none;
    }
    #gml:visited{
        color: black;
    }
    #gml:link{
        color: black;
    }
    #gmail{
        width: 25px;
        padding-left: 30px;
    }
    #contact{
        padding: 20px;
        border-radius: 10px;
        height: 150px;
        
       
    }
    #contact  h3{
        padding: 10px;
        border-radius: 10px;
       box-shadow: 2px 2px 3px rgb(190, 190, 190);
    }

    </style>
</head>
<body>
    <header id="acc">
        <a href="login.php">Sign in / Guest</a>
        <a href="register.php">Create Account</a>
   </header>
   <nav id="menu">
    <a href="home.php"><img id="icon1" src="icongm.jpg" ></a>
    <span id="title">GG Store</span>
     <div id="menuint">
        <a  href="home.php">Home</a>
        <a id="about" href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="cart.php">Cart</a>
      </div>
      <img id="mode" src="light.jpg" >
      <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>
    <br>
    <section id="aboutprg">
        <h1 id="first0">Play better, <span id="first1">  win more</span> !</h1>
        <p id="first2">We believe shopping should be easy, comfortable, and fun <br>
         That's why we bring you the best gaming and tech accessories, <br>
         designed for performance and style. <br>
         Enjoy top-quality products that fit your lifestyle!</p>
    </section>
    </body>
</html>