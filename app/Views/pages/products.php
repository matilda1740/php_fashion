<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VV | PRODUCTS </title>
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="products_page">
        <!-- <h3>Products Page</h3> -->
        <!-- CATEGORIES HEADER -->
        <div class="categories_header_div">
            <div class="each_categories_div">
                <span>Women</span>
                <i class="fas fa-sort-down"></i>
            </div>
            <div class="each_categories_div">
                <span>Men</span>
                <i class="fas fa-sort-down"></i>
            </div>
            <div class="each_categories_div">
                <span>Unisex</span>
                <i class="fas fa-sort-down"></i>
            </div>  
            <div class="each_categories_div">
                <span>Kids</span>
                <i class="fas fa-sort-down"></i>
            </div>    
            <div class="each_categories_div">
                <span>Pets</span>
                <i class="fas fa-sort-down"></i>
            </div>                  
        </div>

        <section class="main_page_section">

            <!-- LANDING PAGE START -->
            <section class="products_banner_section">
                <div class="banner_left products_banner_left">
                    <h3>Paris Fashion Week <span>2078</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut officiis culpa voluptatum vitae nobis, placeat quia rem sequi libero tenetur.</p>
                </div>
                <div class="banner_right">
                
                </div>
            </section>

            <!-- PRODUCTS -->
            <section class="section_title">
                <h2>Featured Products</h2>
            </section>
                
            <section class="products_section">
                <div class="each_product_div">
                    <div class="product_image_div">
                        <img src="<?php echo base_url('/assets/images/street.jpeg'); ?>">
                    </div>
                    <div class="product_info_div">
                        <p class="product_descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="product_choice">
                            <p class="product_price">Ksh. 2000</p>
                            <!-- If not in wishlist -->
                            <i class="far fa-heart"></i>
                            <!-- In Wishlist -->
                            <!-- <i class="fas fa-heart"></i> -->
                            <!-- Add to cart -->
                            <i class="fas fa-cart-plus"></i>
                            <!-- Remove from cart -->
                            <!-- <i class="fas fa-trash-alt"></i> -->
                        </div>
                    </div>
                </div>
                <div class="each_product_div">
                    <div class="product_image_div">
                        <img src="<?php echo base_url('/assets/images/street.jpeg'); ?>">
                    </div>
                    <div class="product_info_div">
                        <p class="product_descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="product_choice">
                            <p class="product_price">Ksh. 2000</p>
                            <!-- If not in wishlist -->
                            <i class="far fa-heart"></i>
                            <!-- In Wishlist -->
                            <!-- <i class="fas fa-heart"></i> -->
                            <!-- Add to cart -->
                            <i class="fas fa-cart-plus"></i>
                            <!-- Remove from cart -->
                            <!-- <i class="fas fa-trash-alt"></i> -->
                        </div>
                    </div>
                </div>
                <div class="each_product_div">
                    <div class="product_image_div">
                        <img src="<?php echo base_url('/assets/images/street.jpeg'); ?>">
                    </div>
                    <div class="product_info_div">
                        <p class="product_descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="product_choice">
                            <p class="product_price">Ksh. 2000</p>
                            <!-- If not in wishlist -->
                            <i class="far fa-heart"></i>
                            <!-- In Wishlist -->
                            <!-- <i class="fas fa-heart"></i> -->
                            <!-- Add to cart -->
                            <i class="fas fa-cart-plus"></i>
                            <!-- Remove from cart -->
                            <!-- <i class="fas fa-trash-alt"></i> -->
                        </div>
                    </div>
                </div>                
            </section>
        </section>

    </section>
</body>
</html>
