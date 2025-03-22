<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
        #home{
            background-color: rgb(2, 2, 44);
        }
        #home:visited{
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
    #homepr{
        width: 600px;
        height: 440px;
        margin-left:120px;
        margin-top: 20px;
        padding: 30px;
        box-shadow: 2px 2px 3px rgb(134, 133, 133);
        
        
    }
    #ttle{
        font-size: 260%;
        color: rgba(24, 24, 63, 0.829);
    }
    #prg{
        font-weight: bold;
        color: gray;
    }
    #only{
        font-size: 150%;
        color: black;
    }
    #imghome{
        width: 500px;
        float: right;
        position: absolute;
        top: 200px;
        left: 800px;
        border-radius: 10px;

    }
    #clear{
        clear: both;
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
        <a id="home" href="home.php">Home</a>
        <a  href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="cart.php">Cart</a>
      </div>
      <img id="mode" src="light.jpg" >
      <a href="cart.php"><img id="iconcrt" src="cart.jpg"></a>
   </nav>

    <section id="homepr">
        <h2 id="ttle">Quality gaming and tech accessories,<br> all in one place!</h2>
        <p id="prg">Shopping for gaming and tech accessories has never been easier. <br>
            We offer high-quality products designed to enhance your experience, <br>
            all at great prices. Find everything you need in one place and upgrade your setup today!
            <br><br><br><span id="only">Easy, fast, and reliable.</span></p>
    </section>
    
     <img id="imghome" src="imghome.jpg" >
     <div id="clear"></div>
</body>
</html>