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
    #accss{
        background-color: black;
        color: white;
    }
    #S29{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
    }
    #p29{
        width: 300px;
        height: 200px;
        border-radius: 10px;
        position: relative;
        left: 2px;
    }
    #S30{
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
    #p30{
        width: 200px;
        height: 210px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t30{
        text-align: center;
    }
    #S31{
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
    #p31{
        width: 250px;
        border-radius: 10px;
       position: relative;
       left: 30px;
    }
    #t31{
        text-align: center;
    }
    #S32{
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
    #p32{
        width: 250px;
        border-radius: 10px;
       position: relative;
       left: 20px;
    }
    #t32{
        text-align: center;
    }
    #S33{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;

    }
    #p33{
        width: 250px;
        border-radius: 10px;
        position: relative;
        left: 20px;
    }
    #t33{
        text-align: center;
    }
    #S34{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top: 575px;
        left: 340px;

    }
    #p34{
        width: 300px;
        height: 220px;
        border-radius: 10px;
        position: relative;
        left: 7px;
    }
    #t34{
        text-align: center;
    }
    #S35{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top : 575px;
        left: 672px;

    }
    #p35{
        width: 220px;
        border-radius: 10px;
        position: relative;
        left: 40px;
    }
    #t35{
        text-align: center;
    }
    #S36{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top : 575px;
        left: 1000px;

    }
    #p36{
        width: 180px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t36{
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
          <a id="product" href="products.html">Products</a>
          <a href="cart.php">Cart</a>
     </div>
     <img id="mode" src="light.jpg" >
     <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>
   <section id="list">
      <a href="Products.php">featured products</a> 
       <a href="peripherals.php">PC Peripherals</a>
       <a href="Console.php">Console</a>
       <a href="chair.php">Gaming chair</a>
       <a id="accss" href="accessories.php">Mobile accessories</a>
       <a href="corner.php">Bargain corner</a>
   </section>
   <br>
   <div id="S29">
    <a href="product29.php"><img id="p29" src="p29.jpg"></a>
    <h3 id="t29">Wireless Mobile Gaming Controller for iPhone/Android</h3>
  </div>
  <div id="S30">
    <a href="product30.php"><img id="p30" src="p30.jpg"></a>
    <h3 id="t30">INIU Portable Charger</h3>
  </div>
  <div id="S31">
    <a href="product31.php"><img id="p31" src="p31.jpg"></a>
    <h3 id="t31">Arctis GameBuds In-Ear</h3>
  </div>
  <div id="S32">
    <a href="product32.php"><img id="p32" src="p32.jpg"></a>
    <h3 id="t32">Zero 2 IEM Headphones with 3.5mm Microphone</h3>
  </div>
  <div id="S33">
    <a href="product33.php"><img id="p33" src="p33.jpg"></a>
    <h3 id="t33">Portable Charger</h3>
  </div>
  <div id="S34">
    <a href="product34.php"><img id="p34" src="p34.jpg"></a>
    <h3 id="t34">Wireless Mobile Gaming</h3>
  </div>
  <div id="S35">
    <a href="product35.php"><img id="p35" src="p35.jpg"></a>
    <h3 id="t35">ZIUTY Wireless Earbuds</h3>
  </div>
  <div id="S36">
    <a href="product36.php"><img id="p36" src="p36.jpg"></a>
    <h3 id="t36">Ultra Sonic TWS In-Ear Headphone</h3>
  </div>
</body>
</html>