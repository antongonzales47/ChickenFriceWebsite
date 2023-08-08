<?php
session_start(); /*initiator*/
?>  
<html>
    <head>
        <title>Chicken Frice Orders</title> <!--Title of the website -->
        <link rel="stylesheet" href="styles.css" />  <!--connection of html to styles.css -->
        <script src="chicken_order.js" async></script> <!-- javascript source file connection to html -->
        <link rel="shortcut icon" type="image/png" href="Images/chicken.ico.ico" /> <!-- This is the tab icon logo -->
    </head>
    <body>
        <header class="main-header">
           
            <h1 class="band-name band-name-large">Chicken Frice</h1> <!-- The big chicken frice header on the order page -->
            <a href="logout.php"><h4>Logout</h4></a> <!--The logout link -->
        </header>
        <section class="container content-section">
            <h2 class="section-header">Specials</h2>

             <!-- Starting from here till the Sig. Blazing Hotsauce, code will be redundant. -->

            <div class="shop-items"> <!--division class name shop-items to be called in css -->
                <div class="shop-item"> <!-- Division class name -->
                    <span class="shop-item-title">Spicy Garlic Butter</span> <!-- Name of the product -->
                    <img class="shop-item-image" src="Images/pic7.png"> <!--links the image relative to the product -->
                    <div class="shop-item-details"> <!--Division name of item details  -->
                        <span class="shop-item-price">₱85.00</span> <!-- Price of the product -->
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> <!-- This is the ADD TO CART button -->
                    </div>
                    <!--End of class-->
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Korean Barbecue</span>
                    <img class="shop-item-image" src="Images/pic8.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <!--end of section -->

        <section class="container content-section">
            <h2 class="section-header">Menu</h2> <!-- Menu section -->
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Garlic Butter</span>
                    <img class="shop-item-image" src="Images/pic1.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Garlic Parmesan</span>
                    <img class="shop-item-image" src="Images/pic2.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Fiery Buffalo</span>
                    <img class="shop-item-image" src="Images/pic3.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Japanese Teriyaki</span>
                    <img class="shop-item-image" src="Images/pic4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Garlic Barbecue</span>
                    <img class="shop-item-image" src="Images/pic5.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item"> <!--Sig. Blazing Hotsauce -->
                    <span class="shop-item-title">Sig. Blazing Hotsauce</span>
                    <img class="shop-item-image" src="Images/pic6.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱85.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                </div>
            </div>
        </section> <!-- end of section -->

        <!--This syntax stores the add to cart items so that the quantity can be set, the item removed, and the item to be purchased -->
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">₱0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button> <!-- purchase button-->
        </section>

         <!-- Footer  -->
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Chicken Frice</h3>
                <ul class="nav footer-nav">
                    
                    <li>
                        <a href="https://www.spotify.com" target="_blank"> <!--goes to spotify -->
                            <img src="Images/Spotify Logo.png"> <!--image -->
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank"> <!--goes to facebook -->
                            <img src="Images/Facebook Logo.png"> <!-- image -->
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>