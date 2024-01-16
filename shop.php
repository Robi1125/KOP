<?php

  require_once 'connection.php';

  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/casino" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section id="header">
        <a href="#"><img src="C:\Users\toth1\Downloads\logo.png" class="logo" alt=""></a>
        <nav>
            
            <a href="index.php">Home</a>
            <a class="active" href="#">Shop</a>
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

    <section id="page-header">
        <div class="carousel">
            <div class="list">
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193158647002431558/pixlr-image-generator-054f26f4-2391-470c-b9d4-d9e0319bce76.png?ex=65abb295&is=65993d95&hm=1182e0f65863c44edaa2b74bdf9bc5030123bf42f490c28f11244e701c12519a&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="author">Shop</div>
                        <div class="title">Air Force 1</div>
                        
                        <div class="des">
                            Nike Air Force is a range of athletic shoes made by Nike that began with Air Force 1. It was created by designer Bruce Kilgore and was the first basketball shoe to use Nike's "Air" technology.
                            
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                            <button>SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193160309716832307/pixlr-image-generator-1a993d5c-c932-46e1-9991-07fdeabff581.png?ex=65abb421&is=65993f21&hm=7790e8a30bb3d573ccab6fac37c926788cb5125e6843b59c8917206a73a835a8&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="author">Shop</div>
                        <div class="title">Air Jordan 1</div>
                        
                        <div class="des">
                            Air Jordan is a line of basketball shoes produced by Nike, Inc. Related apparel and accessories are marketed under Jordan Brand.The first Air Jordan shoe was produced for basketball player Michael Jordan during his time with the Chicago Bulls.The shoes were designed for Nike by Peter Moore, Tinker Hatfield, and Bruce Kilgore.
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                            <button>SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193160309175746580/pixlr-image-generator-0d28276e-0281-40d5-a909-29b0b4c72471.png?ex=65abb421&is=65993f21&hm=1851afebfaf014e706e74d5674e237fe006d11dbed6ce513d3aa8b7acd39352d&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="author">Shop</div>
                        <div class="title">Nike Dunk Low</div>
                        
                        <div class="des">
                            Nike Dunk is a line of shoes released by Nike in 1985. Originally released as a basketball shoe, the popularity of the shoe among the skating community also led to the creation of a variant used for skateboarding. 
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                            <button>SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193160314762575932/pixlr-image-generator-1342bd15-b06f-40d4-ad40-852519d9e84d.png?ex=65abb422&is=65993f22&hm=b3c9fe83d6eafecec891482fd152685f77cca81e4f2e9c9079b23546ae9b782b&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="author">Shop</div>
                        <div class="title">Nike Air Jordan 1</div>
                
                        <div class="des">
                            
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                            <button>SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumbnail">
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193158647002431558/pixlr-image-generator-054f26f4-2391-470c-b9d4-d9e0319bce76.png?ex=65abb295&is=65993d95&hm=1182e0f65863c44edaa2b74bdf9bc5030123bf42f490c28f11244e701c12519a&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="title">
                            Air Force 1
                        </div>
                        <div class="description">
                            Description
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193160309716832307/pixlr-image-generator-1a993d5c-c932-46e1-9991-07fdeabff581.png?ex=65abb421&is=65993f21&hm=7790e8a30bb3d573ccab6fac37c926788cb5125e6843b59c8917206a73a835a8&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="title">
                            Air Jordan 1
                        </div>
                        <div class="description">
                            Description
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193160309175746580/pixlr-image-generator-0d28276e-0281-40d5-a909-29b0b4c72471.png?ex=65abb421&is=65993f21&hm=1851afebfaf014e706e74d5674e237fe006d11dbed6ce513d3aa8b7acd39352d&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="title">
                            Nike Dunk Low   
                        </div>
                        <div class="description">
                            Description
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://media.discordapp.net/attachments/1066713488451440671/1193160314762575932/pixlr-image-generator-1342bd15-b06f-40d4-ad40-852519d9e84d.png?ex=65abb422&is=65993f22&hm=b3c9fe83d6eafecec891482fd152685f77cca81e4f2e9c9079b23546ae9b782b&=&format=webp&quality=lossless&width=1636&height=935">
                    <div class="content">
                        <div class="title">
                            Name Slider
                        </div>
                        <div class="description">
                            Description
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <div class="time"></div>
        </div>
    
        <script src="kiserlet.js"></script>  
        
        
    </section>
    
<section id="product1" class="section-p1">

    <div class="pro-container">
    <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="<?php echo $row["picture"]; ?>" alt=    "">
                <div class="des">
                    <span ><?php echo $row["product_name"];?> </span>
                    <h5>Sneaker</h5>
                    <div class ="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$<?php echo $row["price"]; ?></h4>
                </div>  
                <a href= "#"><i class= "fa-solid fa-cart-shopping "></i></a>
            </div>
   
 <?php

}
?>
</section>


<section id="pagination" class = "section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></i></a>


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

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="https://freepngimg.com/download/android/67006-app-play-google-android-store-free-clipart-hd.png" alt="">
            <img src="https://digitopoly.files.wordpress.com/2016/06/app-store-logo.png" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src ="https://th.bing.com/th/id/OIP.GLfU6tGgbDoy4tiVfsOY5gHaBB?rs=1&pid=ImgDetMain" alt="">
    </div>

</footer>
    
    <script src="script.js"></script>
</body>
</html>
