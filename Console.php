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
    #console{
        background-color: black;
        color: white;
    }
    #S17{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
    }
    #p17{
        width: 300px;
        height: 200px;
        border-radius: 10px;
        position: relative;
        left: 2px;
    }
    #S18{
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
    #p18{
        width: 250px;
        height: 210px;
        border-radius: 10px;
       position: relative;
       left: 40px;
    }
    #t18{
        text-align: center;
    }
    #S19{
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
    #p19{
        width: 270px;
        border-radius: 10px;
       position: relative;
       left: 20px;
    }
    #t19{
        text-align: center;
    }
    #S20{
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
    #p20{
        width: 150px;
        border-radius: 10px;
       position: relative;
       left: 70px;
    }
    #t20{
        text-align: center;
    }
    #S21{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;

    }
    #p21{
        width: 250px;
        border-radius: 10px;
        position: relative;
        left: 20px;
    }
    #t21{
        text-align: center;
    }
    #S22{
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
    #p22{
        width: 300px;
        height: 220px;
        border-radius: 10px;
        position: relative;
        left: 2px;
    }
    #t22{
        text-align: center;
    }
    #S23{
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
    #p23{
        width: 300px;
        border-radius: 10px;
        position: relative;
        left: 2px;
    }
    #t23{
        text-align: center;
    }
    #S24{
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
    #p24{
        width: 210px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t24{
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
        <a id="about" href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="cart.php">Cart</a>
      </div>
      <img id="mode" src="light.jpg" >
      <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>
   <section id="list">
       <a href="Products.php">featured products</a> 
       <a href="peripherals.php">PC Peripherals</a>
       <a id="console" href="Console.php">Console</a>
       <a href="chair.php">Gaming chair</a>
       <a href="accessories.php">Mobile accessories</a>
       <a href="corner.php">Bargain corner</a>
   </section>
   <br>
  <div id="S17">
    <a href="product17.php"><img id="p17" src="p17.jpg"></a>
    <h3 id="t17">Revolution 5 Pro Wireless Controller</h3>
  </div>
  <div id="S18">
    <a href="product18.php"><img id="p18" src="p18.jpg"></a>
    <h3 id="t18">Acer USB Hub 4 Ports</h3>
  </div>
  <div id="S19">
    <a href="product19.php"><img id="p19" src="p19.jpg"></a>
    <h3 id="t19">HUANUO Dual Monitor Stand</h3>
  </div>
  <div id="S20">
    <a href="product20.php"><img id="p20" src="p20.jpg"></a>
    <h3 id="t20">Charging Station for Multiple Devices</h3>
  </div>
  <div id="S21">
    <a href="product21.php"><img id="p21" src="p21.jpg"></a>
    <h3 id="t21">4-Port USB 3.0 Hub</h3>
  </div>
  <div id="S22">
    <a href="product22.php"><img id="p22" src="p22.jpg"></a>
    <h3 id="t22">Ultimate Wired Controller </h3>
  </div>
  <div id="S23">
    <a href="product23.php"><img id="p23" src="p23.jpg"></a>
    <h3 id="t23">PlayStation 5 (PS5) Digital Edition Slim</h3>
  </div>
  <div id="S24">
    <a href="product24.php"><img id="p24" src="p24.jpg"></a>
    <h3 id="t24">Xbox Wireless Adapter for Windows</h3>
  </div>
</body>
</html>