<DOCTYPE html>
<html lang="en">
    <head>
        <title>Grammart</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    </head>
    <body>
        <div class="whole">
            <div class="navbar">
                <h1 class="heading">GramMart</h1>
                
            </div>
            <div class="bar">
                <button type="button" class="home"><i class="fa-solid fa-house"></i><a href="index1.html">Home</a></button> 
                <button class="home" onclick="background.jpg"><i class="fa-solid fa-heart"></i>Wishlist</button> 
                <button class="home" onclick="background.jpg"><i class="fa-solid fa-cart-shopping"></i>Cart</button> 
                <button class="home" ><i class="fa-solid fa-user"></i><a href="account.html">Account</a></button>
            </div>
            <div class="lens">
                <input type="search" placeholder="Search Your Products" class="search" onfocus="playSearchSound()">
                <div class="upload">
                    <button type="button" class="upload1" ><a href="http://localhost/php_grammart/index.php" ><i class="fa-regular fa-camera"></i></a></button> 
                </div>
                <audio  id="searchAudio" >
                        <source src="search2.mpeg" type="audio/mpeg">
                </audio>
            </div>
            <div class="vid">
                 <video autoplay loop muted class="vid2">
                            <source src="video2.mp4">
                 </video>
            </div>
            <p class="hot">Hot Deals</p>
            <div class="big">
                <div class="first">
                    <img src="pears.jpeg" alt="soap" class="soap">
                   <div class="products" >
                     <p >Soaps</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;39</span>
                        <span class="oprice">&#8377;49</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                    
                </div>
                
                
                <div class="first">
                    <img src="bucket.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Buckets</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;99</span>
                        <span class="oprice">&#8377;150</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="slippers.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Filp Flops</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;299</span>
                        <span class="oprice">&#8377;360</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="chairs.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Chairs</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;1300</span>
                        <span class="oprice">&#8377;2000</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                
                <div class="first">
                    <img src="pillows.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Pillows</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;140</span>
                        <span class="oprice">&#8377;210</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="hairdryer.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Hair Dryer</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;1999</span>
                        <span class="oprice">&#8377;2400</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="lock.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Locks</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;79</span>
                        <span class="oprice">&#8377;110</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
            </div>
            <p class="hot" >Groceries For You</p>
            <div class="big">
                <div class="first">
                    <img src="rice.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Rice</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;200</span>
                        <span class="oprice">&#8377;379</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                
                <div class="first">
                    <img src="oil.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Oil</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;1200</span>
                        <span class="oprice">&#8377;1500</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="dal.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Dals</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;250</span>
                        <span class="oprice">&#8377;300</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="salt.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Rock Salt</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;60</span>
                        <span class="oprice">&#8377;110</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="veg.jpeg" alt="soap" class="soap">
                   <div class="products" >
                     <p >Vegetables</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;39</span>
                        <span class="oprice">&#8377;49</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="fruits.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Fruits</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;15</span>
                        <span class="oprice">&#8377;20</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="milk.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Milk</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;60</span>
                        <span class="oprice">&#8377;80</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
            </div>
            <p class="hot">Snacks&Items</p>
            <div class="big">
                <div class="first">
                    <img src="chocolate.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Chocolates</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;30</span>
                        <span class="oprice">&#8377;45</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                
                <div class="first">
                    <img src="bingo.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Bingo</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;10</span>
                        <span class="oprice">&#8377;20</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="lays.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Lays</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;10</span>
                        <span class="oprice">&#8377;20</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="biscuit.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Biscuits</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;50</span>
                        <span class="oprice">&#8377;70</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="haldiram.jpeg" alt="soap" class="soap">
                   <div class="products" >
                     <p >Haldirams</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;55</span>
                        <span class="oprice">&#8377;70</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="knorr.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Knorr Soups</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;15</span>
                        <span class="oprice">&#8377;20</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
                <div class="first">
                    <img src="pasta.jpeg" alt="soap" class="soap">
                    <div class="products" >
                     <p >Pasta</p>
                   </div>
                    <div class="price">
                        <span class="nprice">&#8377;70</span>
                        <span class="oprice">&#8377;110</span>
                    </div>
                    <div class="but">
                        <button class="cartbut">Add to Cart</button>
                    </div>
                </div>
            </div>
            
           
        
            
           
        </div>
    <body>
    <script defer>
        function playSearchSound(){
            document.getElementById("searchAudio").play();
        }
    </script>
</html>