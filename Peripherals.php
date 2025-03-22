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
    #Peripherals{
        background-color: black;
        color: white;
    }
    #S5{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
      

    }
    #p5{
        width: 180px;
        border-radius: 10px;
        position: relative;
        left: 60px;
    }
    #S6{
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
    #p6{
        width: 250px;
        height: 210px;
        border-radius: 10px;
       position: relative;
       left: 40px;
    }
    #t6{
        text-align: center;
    }
    #S7{
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
    #p7{
        width: 170px;
        border-radius: 10px;
       position: relative;
       left: 70px;
    }
    #t7{
        text-align: center;
    }
    #S8{
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
    #p8{
        width: 200px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t8{
        text-align: center;
    }
    #S9{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;

    }
    #p9{
        width: 300px;
        border-radius: 10px;
    }
    #t9{
        text-align: center;
    }
    #S10{
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
    #p10{
        width: 220px;
        border-radius: 10px;
       position: relative;
       left: 40px;
    }
    #t10{
        text-align: center;
    }
    #S11{
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
    #p11{
        width: 220px;
        border-radius: 10px;
        position: relative;
        left: 50px;
    }
    #t11{
        text-align: center;
    }
    #S12{
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
    #p12{
        width: 210px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t12{
        text-align: center;
    }
    #S13{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;

    }
    #p13{
        width: 300px;
        border-radius: 10px;
    }
    #t13{
        text-align: center;
    }
    #S14{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top: 900px;
        left: 340px;

    }
    #p14{
        width: 240px;
        border-radius: 10px;
       position: relative;
       left: 40px;
    }
    #t14{
        text-align: center;
    }
    #S15{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top: 900px;
        left: 672px;

    }
    #p15{
        width: 210px;
        border-radius: 10px;
        position: relative;
        left: 40px;
    }
    #t15{
        text-align: center;
    }
    #S16{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
        position: absolute;
        top : 900px;
        left: 1000px;

    }
    #p16{
        width: 130px;
        border-radius: 10px;
       position: relative;
       left: 70px;
    }
    #t16{
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
          <a id="product" href="products.php">Products</a>
          <a href="cart.php">Cart</a>
     </div>
     <img id="mode" src="light.jpg" >
     <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>
   <section id="list">
       <a href="Products.php">featured products</a> 
       <a id="Peripherals" href="peripherals.php">PC Peripherals</a>
       <a href="Console.php">Console</a>
       <a href="chair.php">Gaming chair</a>
       <a href="accessories.php">Mobile accessories</a>
       <a href="corner.php">Bargain corner</a>
   </section>
    <br>
    <div id="S5">
        <a href="product5.php"><img id="p5" src="p5.jpg"></a>
        <h3 id="t5">Alienware Pro Wireless Gaming Headset</h3>
    </div>
    <div id="S6">
        <a href="product6.php"><img id="p6" src="p6.jpg"></a>
        <h3 id="t6">Alienware Pro Wireless Gaming Headset</h3>
    </div>
    <div id="S7">
        <a href="product7.php"><img id="p7" src="p7.jpg"></a>
        <h3 id="t7">Logitech G733 Lightspeed Wireless Gaming Headset </h3>
    </div>
    <div id="S8">
        <a href="product8.php"><img id="p8" src="p8.jpg"></a>
        <h3 id="t8"> Gaming Monitor (2560x1440p) </h3>
    </div>
    <div id="S9">
        <a href="product9.php"><img id="p9" src="p9.jpg"></a>
        <h3 id="t9"> Mechanical Gaming Keyboard </h3>
    </div>
    <div id="S10">
        <a href="product10.php"><img id="p10" src="p10.jpg"></a>
        <h3 id="t10"> Wireless Gaming Headset </h3>
    </div>
    <div id="S11">
        <a href="product11.php"><img id="p11" src="p11.jpg"></a>
        <h3 id="t11"> Wireless Gaming Mouse </h3>
    </div>
    <div id="S12">
        <a href="product12.php"><img id="p12" src="p12.jpg"></a>
        <h3 id="t12"> Wireless Gaming headset </h3>
    </div>
    <div id="S13">
        <a href="product13.php"><img id="p12" src="p13.jpg"></a>
        <h3 id="t13"> Gaming Monitor </h3>
    </div>
    <div id="S14">
        <a href="product14.php"><img id="p14" src="p14.jpg"></a>
        <h3 id="t14">BladeHawks Extra Large RGB Gaming Mouse </h3>
    </div>
    <div id="S15">
        <a href="product15.php"><img id="p15" src="p15.jpg"></a>
        <h3 id="t15">Curved Gaming Monitor </h3>
    </div>
    <div id="S16">
        <a href="product16.php"><img id="p16" src="p16.jpg"></a>
        <h3 id="t16">Logitech G Pro Wireless Gaming Mouse</h3>
    </div>
</body>
</html>