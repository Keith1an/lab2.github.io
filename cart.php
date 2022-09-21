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
               <a href="index.php"> <img src="images/logo.png" width="125px"></a>
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
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
         </div>

         <!-----------cart items details------>
         <div class="small-container cart-page ">

            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <th>
                        <div class="cart-info">
                            <img src="images/buy-1.jpg" >
                            <div>
                                <p> Red Printed T-Shirt</p>
                                <small>Price: $10.00</small><br>
                                <a href="">Remove</a>
                            </div>
                        </div>

                    </th>
                    <th><input type="number"value="1"></th>
                    <td>$50.00</td>

                </tr>
                <tr>
                    <th>
                        <div class="cart-info">
                            <img src="images/buy-2.jpg" >
                            <div>
                                <p> Red Printed T-Shirt</p>
                                <small>Price: $20.00</small><br>
                                <a href="">Remove</a>
                            </div>
                        </div>

                    </th>
                    <th><input type="number"value="1"></th>
                    <td>$50.00</td>

                </tr>
                <tr>
                    <th>
                        <div class="cart-info">
                            <img src="images/buy-3.jpg" >
                            <div>
                                <p> Red Printed T-Shirt</p>
                                <small>Price: $50.00</small><br>
                                <a href="">Remove</a>
                            </div>
                        </div>

                    </th>
                    <th><input type="number"value="1"></th>
                    <td>$50.00</td>

                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$150.00</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$35.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$185.00</td>
                    </tr>
                </table>
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

</body>
</html>