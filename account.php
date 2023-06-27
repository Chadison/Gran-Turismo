
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Account | Gran Turismo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="navbar" >
                    <a href="index.html">
                    <div class="logo">
                        <img src="images/logo.png" width="125px">
                    </div>
                    </a>
                    <nav>
                        <ul>
                            <li><a href="index.html" style="color: white;">HOME</a></li>
                            <li><a href="products.html" style="color: white;">MODELS</a></li>
                            <li><a href="about-us.html" style="color: white;">ABOUT US</a></li>
                            <li><a href="account.php" style="color: white;">ACCOUNT</a></li>
                        </ul>
                    </nav>
                    <img src="images/cart.png" width="30px" height="30px">
                </div>
            </div>
        </div>
        <!--account-->
        <div class="account-bg">
            <div class="container2">
                <input type="checkbox" id="check">
                <div class="login form">
                  <header style="color: white;">LOGIN</header>
                  <form action="login.php" method="POST">
                    <p>
                    <label style="color: rgb(172, 172, 172);" for="email">Enter your email </label>
                    <input type="text" name="email" id="email">
                    </p>
                    <p>
                    </p>
                    <p>
                    <label style="color: rgb(172, 172, 172);" for="password">Enter your password</label>
                    <input type="password" name="password" id="password">
                    </p>
                    <p>
                    <input type="submit" class="button" name="login" value="Login">
                    </p>
                  </form>
                  <div class="signup">
                    <span style="color: white;" class="signup">Don't have an account?
                     <label for="check">Sign up</label>
                    </span>
                  </div>
                </div>
                <div class="registration form">
                  <header style="color: white;">SIGN UP</header>
                  <form action="connect.php" method="POST">
                    <p>
                    <label style="color: rgb(172, 172, 172);" for="email">Enter your email </label>
                    <input type="text" name="email" id="email">
                    </p>
                    <p>
                    </p>
                    <p>
                    <label style="color: rgb(172, 172, 172);" for="password">Enter your password</label>
                    <input type="password" name="password" id="password">
                    </p>
                    <p>
                    <input type="submit" class="button" name="submit" id="submit" value="Sign Up">
                    </p>
                  </form>
                  <div class="signup">
                    <span style="color: white;" class="signup">Already have an account?
                     <label for="check">Login</label>
                    </span>
                  </div>
                </div>
              </div>
        </div>
        <!--footer-->
        <div class="footer">
            <div class="row">
                <div class="brands">
                    <div class="small-container">
                        <div class="row">
                            <div class="col-5">
                                <img src="images/brands/toyota.png">
                            </div>
                            <div class="col-5">
                                <img src="images/brands/honda.png">
                            </div>
                            <div class="col-5">
                                <img src="images/brands/mazda.png">
                            </div>
                            <div class="col-5">
                                <img src="images/brands/nissan.png">
                            </div>
                            <div class="col-5">
                                <img src="images/brands/mitsubishi.png">
                            </div>
                            <div class="col-5">
                                <img src="images/brands/subaru.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-col-3">
                    <h2>Our Socials</h2>
                    <ul>
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>Youtube</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>