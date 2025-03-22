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
   
    #list{
        margin-top: 15px;
        padding: 10px 90px 10px 0px;
        text-align: center;
        background-color: rgb(6, 10, 66);
        
    }
    #list a{
        text-decoration: none;
        padding: 5px 40px;
        border-radius: 6px;
      
    }
    #list a:link{
        color: white;
    }
    #list a:visited{
        color: white;
    }
    #list a:hover{
        background-color: rgb(88, 139, 199);
        color: white;
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
    #featured{
        background-color: black;
        color: white;
    }
    #S1{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top: 255px;

    }
    #p1{
        width: 300px;
        border-radius: 10px;
    }
    #t1{
        text-align: center;
    }
    #S2{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        bottom: 30px;
        left: 340px;

    }
    #p2{
        width: 200px;
        border-radius: 10px;
       position: relative;
       left: 40px;
    }
    #t2{
        text-align: center;
    }
    #S3{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        bottom: 30px;
        left: 672px;

    }
    #p3{
        width: 170px;
        border-radius: 10px;
       position: relative;
       left: 70px;
    }
    #t3{
        text-align: center;
    }
    #S4{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        bottom: 30px;
        left: 1000px;

    }
    #p4{
        width: 200px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t4{
        text-align: center;
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
        <a id="product"  href="products.php">Products</a>
        <a href="cart.php">Cart</a>
      </div>
      <img id="mode" src="light.jpg" >
      <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>
   <section id="list">
       <a id="featured" href="Products.php">featured products</a> 
       <a href="Peripherals.php">PC Peripherals</a>
       <a href="Console.php">Console</a>
       <a href="chair.php">Gaming chair</a>
       <a href="accessories.php">Mobile accessories</a>
       <a href="corner.php">Bargain corner</a>
   </section>
    <br>
        <div id="S1">
            <a href="product1.php"><img id="p1" src="p1.jpg"></a>
             <h3 id="t1">SHURIKEY GEAR 65 Percent Gaming Keyboard</h3>  
        </div>
  
   <div id="S2">
    <a href="product2.php"><img id="p2" src="p2.jpg"></a>
    <h3 id="t2">TECKNET Ergonomic Mouse</h3>
   </div>
   <div id="S3">
    <a href="product3.php"><img id="p3" src="p3.jpg"></a>
    <h3 id="t3">AutoFull C3 Gaming Chair</h3>
   </div>
   <div id="S4">
    <a href="product4.php"><img id="p4" src="p4.jpg"></a>
    <h3 id="t4">ASUS ROG Delta II Wireless Gaming Headset</h3>
   </div>
</body>
</html>