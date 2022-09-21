<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
    <div class="container">
    <div class="navbar">
            <div class="logo">
              <a href=""> <img src="images/logo.png" width="125px"></a>
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
         </div>

         <!---------single product details--------->

         <div class="small-container  single-product">
            <div class="row">
                <div class="col-2">
                    <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/gallery-1.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/gallery-2.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/gallery-3.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/gallery-4.jpg" width="100%" class="small-img">
                        </div>

                    </div>

                </div>
                <div class="col-2">
                    <p>Home / T-Shirt</p>
                    <h1>Red Printed T-Shirt by HRX</h1>
                    <H4>$50.00</H4>
                    <select >
                        <option >Select Size</option>
                        <option >XXL</option>
                        <option >XL</option>
                        <option >Large</option>
                        <option >Medium</option>
                        <option >Small</option>
                    </select>
                    <input type="number" value="1">
                    <a href="cart.html" class="btn">Add to Cart</a>
                    
                    <h3>Product Details <i class="fa fa-indent" ></i> </h3>
                    <br>
                    <p>Give your summer wardrobe a style upgrade with the
                        HRX Men`s active T-Shirt. Team it with a pair of 
                        short for your morning workout
                    </p>
                </div>

            </div>
         </div>

         <!----------title------>

         <div class="small-container">
            <div class="row row-2">
                <h2>Related Product</h2>
                <p>View More</p>
            </div>
         </div>





<!---------products-->
    <div class="small-container">   

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


<!----------js for product galary---------->

<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg =document.getElementsByClassName("small-img");


SmallImg[0].onclick=function(){
    ProductImg.src=SmallImg[0].src;
}
SmallImg[1].onclick=function(){
    ProductImg.src=SmallImg[1].src;
}
SmallImg[2].onclick=function(){
    ProductImg.src=SmallImg[2].src;
}
SmallImg[3].onclick=function(){
    ProductImg.src=SmallImg[3].src;
}

</script>

</body>
</html>