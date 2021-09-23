<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce-Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,700;1,300;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>



<body>






 <div class="account-page">
<?php



session_start();

if  ($_SESSION['isLogged'] == true)
echo "You are Logged In";
else
echo '


<div class="header">

<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="home.html"><img src="pic/logo.png" alt="" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItem">
                <li><a href="home.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="#" target="_blank">About</a></li>
                <li><a href="#foot">Contact</a></li>
                <li><a href="http://localhost/thanvi/index.php">Account</a></li>

            </ul>
        </nav>
        <a href="card.html"><img src="pic/cart.png" alt="" width="30px" height="30px"></a>
        <img src="pic/menu.png" class="menu-icon" onclick="menutoggle()">

        <label class="switch">
            <input onclick="myFunction()" type="checkbox" checked>
            <span class="slider round"></span>
    </div>

</div>




<div class="container">
    <div class="row">
        <div class="col-2">
            <img src="pic/image1.png" alt="" width="100%">
        </div>
        <div class="col-2">
            <div class="form-container">
                <div class="form-btn">
                    <span onclick="login()">
                        Login
                    </span>
                    <span onclick="register()">
                        Register
                    </span>
                    <hr id="Indicator">

                </div>
                 <form id="LoginForm" action="login.php" method="post">
                     <input type="text"  name="username" id="email" placeholder="Email">

                     <input type="password" name="password" id="pass" placeholder="password">
                     <button type="submit" class="btn">Login</button>
                     <a href="">Forgot Password</a>
                 </form>





                <form id="RegForm" action="" method="post">
                    <input type="text" name="name"id="name" placeholder="email">
                     <input type="email" name="email" id="email" placeholder="Enter your email">
                    <input type="password" name="password" id="pass" placeholder="password">
                    <button type="submit" class="btn">Register</button>
<?php 





?>

                    <!-- <a href="">Forgot Password</a> -->
                </form>

            </div>
        </div>
    </div>
</div>



    <!-- footer  -->
    <div id="footer">
        <div class="footer">


            <div class="container">


                <div class="row">

                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="pic/play-store.png" alt="">
                            <img src="pic/app-store.png" alt="">
                        </div>
                    </div>


                    <div class="footer-col-2">
                        <img src="pic/logo-white.png" alt="">
                        <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many
                        </p>
                    </div>


                    <div class="footer-col3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Bloge post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>


                    <div class="footer-col4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Fasebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>YouTube</li>
                        </ul>
                    </div>


                </div>

                <hr>
                <p class="cr">All &copy; reserved to Thanvi</p>

            </div>
        </div>
    </div>
    '
    ?>

    <!-- js for toggol menu  -->

    <script>
        var MenuItem = document.getElementById("MenuItem");
        MenuItem.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItem.style.maxHeight == "0px") {
                MenuItem.style.maxHeight = "200px"
            } else {
                MenuItem.style.maxHeight = "0px"
            }

        }
    </script>



    <!-- js for toggol form  -->




    <script>
        var LoginForm = document.getElementById('LoginForm');
        var RegForm = document.getElementById('RegForm');
        var Indicator = document.getElementById('Indicator');
        // console.log(RegForm);

        function register() {
            RegForm.style.transform = 'translateX(0px)';
            LoginForm.style.transform = 'translateX(0px)';
            Indicator.style.transform = 'translateX(100px)';
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = 'translateX(300px)';
            Indicator.style.transform = 'translateX(00px)';
        }
    </script>




   


</body>
</html>