<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
     
        section{
          
            width: 400px;
            height: 400px;
            padding: 70px 30px 60px 30px;
            font-size: 250%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 60px;
            border-radius: 50px;
            box-shadow: 5px 5px 7px rgb(206, 205, 205) inset, 
            -5px -5px 7px rgb(206, 205, 205) inset;
         
         
          
        }
        h3{
            text-align: center;
            
        }
        a{
            text-decoration: none;
        }
       #name{
        width: 220px;
        height: 30px;
        border-radius: 15px;
     
       }
       #mail{
        width: 220px;
        height: 30px;
        position: relative;
       left: 18px;
       border-radius: 15px;
       }
       #pword{
        width: 222px;
        height: 30px;
        border-radius: 15px;
       }
       #l1{
        font-size: 18px;
        position: relative;
        right: 15px;
        text-decoration: underline black 1px ;
      
        
       }
       #l2{
        font-size: 18px;
        position: relative;
        right: 30px;
        text-decoration: underline black 1px ;
       }
       #l3{
        font-size:18px;
        position: relative;
        right: 15px;
        text-decoration: underline black 1px ;
       }
       #rgstr{
        width: 350px;
        height: 50px;
        border-radius: 8px;
        background-color: rgba(36, 105, 196, 0.815);
       
    
       }
       footer{
        font-size: 16px;
       }
    </style>
</head>
<body>
    <section>
        <h3>Register</h3>
    <form action="" method="post">
        <label id="l1" for="name">Username</label> 
        <input id="name" type="text" name="username" placeholder="Username" >
      <br>
        <label id="l2" for="mail">Email </label>
        <input id="mail" type="gmail" name="gmail" placeholder="Email@gmail.com">
      <br>
        <label id="l3" for="pword">password</label> 
        <input id="pword" type="password" name="password" placeholder="Password.."> 
        <br>
        <button type="submit" id="rgstr"> REGISTER</button>
    </form> <br>
      <footer>  <span>Already a member   ? </span>
        <a  href="login.php">Login</a>
       </footer>
</body>
    </section>
    
</html>