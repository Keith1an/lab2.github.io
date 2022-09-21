<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeithShop Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="navbar">
            <div class="logo">
               <a href="index.php"><img src="images/logo.png" width="125px"> </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                    
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Your Workout <br> A New Style</h1>
                <p>NO WORK UP EQUIPMENTS AND TOOLS?NO PROBLEM</p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" >
            </div>

        </div>
    </div>
</div>

<!----- featured categories ----->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg" >
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg" >
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg" >
                </div>
         </div>
        </div>
        
    </div>
    <!----- featured Products ----->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
               <a href="product-details.html"><img src="images/product-1.jpg" alt=""></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-2.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>
    <!-----offer----->
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/exclusive.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusive Available on KeithStore</p>
                <h1>Smart band 4</h1>
                <small>The Mi band 4 features a 56.0% larger 
                    (than mi band 3) amoled color fully paid display
                    with adjustable brightness </small>
                    <a href="" class="btn" >Buy Now &#8594;</a>
            </div>
        </div>
    </div>

<!---------testimonial --------->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-star" ></i>
                <p>KEITHIAN PARADERO is simple dummy and CEO of the printing and typesetting industry.
                    KEITHIAN PARADERO has been the industry`s standard dummy text ever </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="images/user-4.png" >
                    <h3>Keithian Paradero</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-star" ></i>
                <p>Neilthon Taupan is simple  guy and friendly in the printing and typesetting industry.
                    Neilthon Taupan has been the industry`s standard dummy text ever </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="images/user-5.jpg" >
                    <h3>Neilthon Taupan</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-star" ></i>
                <p>KEITHIAN PARADERO is simple dummy text of the printing and typesetting industry.
                    KEITHIAN PARADERO has been the industry`s standard dummy text ever </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="images/user-4.png" >
                    <h3>Keithian Paradero</h3>
            </div>
        </div>
    </div>
</div>

<!------------brands------>

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png" alt="">
            </div>
        </div>
    </div>
</div>

<!------------footer-------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Down Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png" alt="">
                <p>Our Purpose is to sustainably make the pleasure and benefits of sports Accessible to the many.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-3">
                <h3>Usefull Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
            <div class="footer-col-5">
                <h3>made by keithian paradero</h3>
                <ul>
                    <li>janice santiago</li>
                    <li>janice santiago</li>
                    <li>janice santiago</li>
                </ul>
            </div>
        </div>
        <hr>
        
    </div>
</div>
<!-----------js for toggle munu------->

<script>
    var MenuItems=document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(  MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }

    }

</script>

</body>
</html>