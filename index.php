<?php
  require_once 'connection.php';
  $sql = "SELECT * FROM product ";
  $all_product = $conn->query($sql) ;
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/casino" rel="stylesheet">
    <link rel="stylesheet" href="style.css" >
    
    
</head>
<body>
    <section id="header">
        <a href="#"><img src="https://i.pinimg.com/564x/5a/a9/df/5aa9df0355a72e61717d519d32d6d086.jpg" class="logo" alt=""></a>
        <nav>
            
           <a class="active" href="#">Home</a>
           <a href="shop.php">Shop</a>
           <a href="#">Blog</a>
           <a href="#">About</a>
           <a href="#">Contact</a>
            <div id="indicator"></div>
        
        </nav>
        <script>
            let marker = document.querySelector('#indicator');
            let nav = document.querySelector('nav');
            let item = document.querySelectorAll('nav a');
    
            nav.onmouseover = function(){
                marker.classList.toggle('change');
            }
    
            function indicator(e){
                marker.style.left = e.offsetLeft + 'px';
                marker.style.width = e.offsetWidth + 'px';
                marker.style.display = "block";
                marker.style.filter = 'hue-rotate('+ Math.random() *360 +'deg)'
            }
            item.forEach(link => {
                link.addEventListener("mouseover", (e) => {
                    indicator(e.target);
                })
            })
    
            function addActiveClass(){
                item.forEach((i) =>
                i.classList.remove('active'));
                this.classList.add('active');
            }
    
            item.forEach((i) =>
            i.addEventListener('click', addActiveClass))
        </script>
            
    </section>

    <section id="hero">
        <div class="container">
            <div class="box one" style="--img:url(https://i.pinimg.com/564x/93/67/d1/9367d144158346525e522b6763304d02.jpg);"></div>
            <div class="box two" style="--img:url(https://i.pinimg.com/564x/49/cc/cb/49cccbc8a96dc58b8e6c313b9e08bdfa.jpg);"></div>
            <div class="box three" style="--img:url(https://i.pinimg.com/564x/6c/56/f4/6c56f44133250e00045cd16c19fbee79.jpg);"></div>
            <div class="box four" style="--img:url(https://i.pinimg.com/originals/ac/a2/cd/aca2cd0c1c2db0ac83bfb2a6399346c5.png);"></div>
            <div class="box five" style="--img:url(https://image.lexica.art/full_jpg/b48d60e3-0690-4a43-9c6b-7015df6317f5);"></div>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="https://img.freepik.com/premium-vector/delivery-man-track_42515-316.jpg" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/018/989/189/small_2x/online-delivery-phone-concept-fast-respond-delivery-package-shipping-on-mobile-online-order-tracking-with-map-free-vector.jpg" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="https://cdn-icons-png.flaticon.com/512/7057/7057954.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="https://media.istockphoto.com/id/1316316575/vector/clienting-abstract-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=sFC7E2hZWtaBTJlccTRI3glLtLUBaVTIdOnOmMfM-Ds=" alt="">
            <h6>Best Prices</h6>
        </div>
        <div class="fe-box">
            <img src="https://img.freepik.com/free-vector/remote-management-distant-work-isometric-icons-composition-with-man-at-computer-table-with-avatars-of-distant-workers_1284-63071.jpg?size=338&ext=jpg&ga=GA1.1.1413502914.1696636800&semt=ais" alt="">
            <h6>Non-Stop Support</h6>
        </div>
       

    </section>
    <section id="product1" class="section-p1">

<div class="pro-container">
<?php
$rowNumber = 0;

while ($row = mysqli_fetch_assoc($all_product)) {
    $rowNumber++;

    
    if ($rowNumber >= 1 && $rowNumber < 9) {
?>
        <div class="pro" onclick="window.location.href='sproduct.php';">
            <img src="<?php echo $row["picture"]; ?>" alt="">
            <div class="des">
                <span><?php echo $row["product_name"]; ?></span>
                <h5>Sneaker</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$<?php echo $row["price"]; ?></h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
        </div>
<?php
    }  
}

?>
</section>
    
<section id ="banner" class="section-m1">
<h4>Repair Services</h4>
<h2>Up to <span>50% Off</span> - All Nike Sneakers</h2>
<button class="normal">Explore More</button>

</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">

    <?php
    
    $rowNmber = 0;

    
    while ($row = mysqli_fetch_assoc($all_product)) {

        $rowNmber++;

        
        if ($rowNmber >= 9 && $rowNmber <= 17) {
    ?>
            <div class="pro">
                <img src="<?php echo $row["picture"]; ?>">
                <div class="des">
                    <span><?php echo $row["product_name"]; ?></span>
                    <h5>Sneaker</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$<?php echo $row["price"]; ?></h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
            </div>
    <?php
        }

        
    }
    
    ?>
</div>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best Sneakers are on sale</span>
            <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>Sneaker Collection</span>
        <button class="white">Collection</button>
</div>
</section>



<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span> special offers.</span></p>
        </div>
        <div class="form">
            <input type = "text" placeholder="Your email address">
            <button class="normal">Sign up </button>


    </div>



</section>

<footer class="section-p1">
    <div class ="col">
        <img class="logo" src="https://png.pngtree.com/png-clipart/20200225/original/pngtree-sneakers-shoes-logo-with-badge-emblems-in-red-and-orange-gradation-png-image_5299865.jpg" alt="">
        <h4>Contact</h4>
        <p><strong>Address: </strong> Komarnanska 28 </p>
        <p><strong>Hours: </strong> 12:00 - 20:00, Monday - Friday </p>
        <div class ="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>  

        </div>

    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    
        
        <p>Secured Payment Gateways</p>
        <img src ="https://th.bing.com/th/id/OIP.GLfU6tGgbDoy4tiVfsOY5gHaBB?rs=1&pid=ImgDetMain" alt="">
    </div>
</footer>
    

</body>
</html>
