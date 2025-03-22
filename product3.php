<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>products</title>
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
    #product{
        background-color: rgb(2, 2, 44);
    }
    #product:visited{
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
       font-size: 220%;
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
    #nad{
        width: 500px;
        padding: 10px;
        margin-left: 200px;
    }
    #p3{
        width: 300px;
        height: 400px;
        border-radius: 10px;
        position: relative;
        left: 130px;
       
    }
    aside{
        width: 500px;
        height:300px;
        padding: 10px;
        position: absolute;
        left: 800px;
        top: 250px;
    }
    #as1{
        font-size: 200%;
        color: rgb(11, 11, 68);
    }
    #price{
        color: rgb(107, 103, 103);
    }
    #dsc{
       line-height: 30px;
       color: rgb(51, 100, 146);
    }
    #home:visited{
       color: rgb(49, 36, 36);
    }
    #pr:visited{
        color: rgb(49, 36, 36);
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
        <a  href="about.php">About</a>
        <a id="product" href="products.php">Products</a>
        <a href="cart.php">Cart</a>
     </div>
     <img id="mode" src="light.jpg" >
     <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>
   <br><br>
    <div id="nad">
        <a id="home" href="home.php">Home</a> 
         <span> > </span>
        <a id="pr" href="products.php">Products</a>
        <br>
        <img id="p3" src="p3.jpg">
    </div>
    
 <aside>
    <h1 id="as1">AutoFull C3 Gaming Chair</h1>
    <h2 id="price"> 2 417.75 MAD</h2>
    <p id="dsc">AutoFull C3 Gaming Chair, Racing Style Gaming Chair <br>
         with Ergonomic Lumbar Support,Adjustable High Back PU <br>
         Leather PC Chair with Footrest.</p>
</aside>
<form action="" method="post">
  </body>
 </html>