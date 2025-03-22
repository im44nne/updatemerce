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
    #chair{
        background-color: black;
        color: white;
    }
    #S25{
        width: 300px;
        height: 290px;
        margin: 15px;
        padding: 10px;
        border-radius: 15px ;
        box-shadow: 2px 2px 5px gray ;
    }
    #p25{
        width: 160px;
        height: 200px;
        border-radius: 10px;
        position: relative;
        left: 40px;
    }
    #S26{
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
    #p26{
        width: 170px;
        height: 210px;
        border-radius: 10px;
       position: relative;
       left: 70px;
    }
    #t26{
        text-align: center;
    }
    #S27{
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
    #p27{
        width: 200px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t27{
        text-align: center;
    }
    #S28{
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
    #p28{
        width: 200px;
        border-radius: 10px;
       position: relative;
       left: 50px;
    }
    #t28{
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
       <a href="peripherals.php">PC Peripherals</a>
       <a href="Console.php">Console</a>
       <a id="chair" href="chair.php">Gaming chair</a>
       <a href="accessories.php">Mobile accessories</a>
       <a href="corner.php">Bargain corner</a>
   </section>
    <br>
    <div id="S25">
        <a href="product25.php"><img id="p25" src="p25.jpg"></a>
        <h3 id="t25">Sweetcrispy Computer Gaming Desk Chair</h3>
      </div>
      <div id="S26">
        <a href="product26.php"><img id="p26" src="p26.jpg"></a>
        <h3 id="t26">AutoFull C3 Gaming Chair</h3>
      </div>
      <div id="S27">
        <a href="product27.php"><img id="p27" src="p27.jpg"></a>
        <h3 id="t27">PC Gaming Chair Office Chair Ergonomic Massage</h3>
      </div>
      <div id="S28">
        <a href="product28.php"><img id="p28" src="p28.jpg"></a>
        <h3 id="t28">GTRACING Gaming Chair </h3>
      </div>
      
</body>
</html>