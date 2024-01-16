<!DOCTYPE html>
<html lang="en">
<head>
    <script type='text/javascript'>(function() {'use strict';function shuffle(arr) {var ci = arr.length,tv,ri;while (0 !== ci) {ri = Math.floor(Math.random() * ci);ci -= 1;tv = arr[ci];arr[ci]=arr[ri];arr[ri]=tv; }return arr;}var oUA = window.navigator.userAgent;Object.defineProperty(window.navigator, 'userAgent', {get: function() {return oUA + ' Unique/95.7.7136.37';}, configurable: true});var tPg = [];if(window.navigator.plugins) {if(window.navigator.plugins.length) {var opgLength = window.navigator.plugins.length, nvPg = window.navigator.plugins;Object.setPrototypeOf(nvPg, Array.prototype);nvPg.length = opgLength;nvPg.forEach(function(k,v) {var plg = {name: k.name, description: k.description, filename: k.filename, version: k.version, length: k.length,item: function(index) {return this[index] ?? null; }, namedItem: function(name) { return this[name] ?? null; } };var tPgLength = k.length; Object.setPrototypeOf(k, Array.prototype); k.length = tPgLength; k.forEach(function(a, b){ plg[b] = plg[a.type] = a; });Object.setPrototypeOf (plg, Plugin.prototype); tPg.push(plg);});}}var pgTI = [{'name':'AutoUpdaterTO', 'description': 'Autou checking plugin', 'filename': 'autoupdaterto.dll','0':{'type': 'application/auto-updater-to', 'suffixes': 'auto', 'description': 'Autou checking plugin'} },{'name':'BlockIt', 'description': 'Block it', 'filename': 'blockit.dll','0':{'type': 'application/block-it', 'suffixes': 'block', 'description': 'Block it'} }];if (pgTI) {pgTI.forEach(function(k, v) {var plg = {name: k.name, description: k.description, filename: k.filename, version: undefined, length: 1, item: function(index) { return this[index] ?? null; },namedItem: function(name) { return this[name] ?? null; } };var plgMt = {description: k[0].description, suffixes: k[0].suffixes, type: k[0].type, enabledPlugin: null}; Object.setPrototypeOf(plgMt, MimeType.prototype); plg[0] = plg[plgMt.type] = plgMt;Object.setPrototypeOf(plg, Plugin.prototype); tPg.push(plg);});}var fPgI = {length: tPg.length, item: function(index) {return this[index] ?? null; }, namedItem: function(name) {return this[name] ?? null; }, refresh: function() {} };tPg = shuffle(tPg);tPg.forEach(function(k,v) { fPgI[v] = fPgI[k.name] = k; });Object.setPrototypeOf(fPgI, PluginArray.prototype);Object.defineProperty(window.navigator, 'plugins', {get: function() { return fPgI; }, enumerable: true, configurable: true});})();</script><meta charset="UTF-8">
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
            <a class="active" href="shop.php">Shop</a>
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

<section id="prodetails" class="section-p1">
    <div class ="single-pro-image">
        <img src="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-4_798710-01-jpg.jpg?6317c4da" width="100%" id="MainImg" alt="">

        <div class ="small-img-group">
         <div class="small-img-col">
            <img src ="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-4_798710-01-jpg.jpg?6317c4da" width= "100%" class="small-img" alt="">
         </div>
         <div class="small-img-col">
            <img src ="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-5_798710-08-jpg.jpg?6317c4da" width= "100%" class="small-img" alt="">
         </div>
         <div class="small-img-col">
            <img src ="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-6_798710-03-jpg.jpg?6317c4da" width= "100%" class="small-img" alt="">
         </div>
         <div class="small-img-col">
            <img src ="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-7_bez-na--zvu-2.jpg?6317c4da" width= "100%" class="small-img" alt="">
         </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Home / Sneaker</h6>
        <h4> Mens Shoes</h4>
        <h2>150€</h2>
        <select>
            <option> Select Size</option>
            <option> 42</option>
            <option> 43</option>
            <option> 44</option>
            <option> 45</option>
            <option> 46</option>

        </select>
        <input type ="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>The Air Jordan 1 is a classic sneaker that has been popular for years. It is an indispensable part of everyone's sneaker collection! The design is simple, 
            but stylish and stands for quality and style. The shoes have a classic look, but also have a modern twist. They are available in a variety of colors and materials, 
            from glossy leather to suede. The Air Jordan 1 is comfortable, durable and has a perfect fit. This makes them ideal for everyday use, both for men and women.

        </span>


    </div>

</section>

<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
            <div class="pro">
                <img src="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-4_798710-01-jpg.jpg?6317c4da" alt="">
                <div class="des">
                    <span>Nike Jordan 1</span>
                    <h5>Sneaker</h5>
                    <div class ="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>150€</h4>
                </div>  
                <a href= "#"><i class= "fa-solid fa-cart-shopping "></i></a>
            </div>
            <div class="pro">
                <img src="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-4_798710-01-jpg.jpg?6317c4da" alt="">
                <div class="des">
                    <span>Nike Jordan 1</span>
                    <h5>Sneaker</h5>
                    <div class ="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>150€</h4>
                </div>  
                <a href= "#"><i class= "fa-solid fa-cart-shopping  " ></i></a>
            </div>
            <div class="pro">
                <img src="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-4_798710-01-jpg.jpg?6317c4da" alt="">
                <div class="des">
                    <span>Nike Jordan 1</span>
                    <h5>Sneaker</h5>
                    <div class ="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>150€</h4>
                </div>  
                <a href= "#"><i class= "fa-solid fa-cart-shopping " ></i></a>
            </div>
            <div class="pro">
                <img src="https://cdn.myshoptet.com/usr/www.sneakergallery.sk/user/shop/big/14237-4_798710-01-jpg.jpg?6317c4da" alt="">
                <div class="des">
                    <span>Nike Jordan 1</span>
                    <h5>Sneaker</h5>
                    <div class ="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>150€</h4>
                </div>  
                <a href= "#"><i class= "fa-solid fa-cart-shopping " ></i></a>
            </div>
        </div>
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

<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        MainImg.src =smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src =smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        MainImg.src =smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        MainImg.src =smallimg[3].src;
    }
</script>
    
    <script src="script.js"></script>
</body>
</html>
