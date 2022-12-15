<?php 
  session_start();
  if(!$_SESSION["user"]){
    header("Location:/LOGIN & REGISTER BY ME/login.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
          <link rel="stylesheet" href="style1.css">
          <title>DEALS SITE</title>
          
    </head>
    <body>
       <div class="container">

        <div class="navbar">
            <div class="logo">
             <img src="logo.jpeg" class="pic" >
             
             </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="Signup.html">Sign up</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="./logout.php">Logout</a></li>

                     </ul>
                </nav>
         </div>
           <div class="row">
                <div class="col-2">
                    <h1>Save your bucks<br>With the best Deals!! </h1><br>
                    <p>Knock Knock deal is here...</p>
                   <h2> <a href="" class="btn">Click it</a></h2>
                
                 </div>
                 <div class="col-2">
                   <img src="dealguru.jpg" > 
                  </div>
           </div>
           

       </div>
 
             
            
             

    </body>
</html>