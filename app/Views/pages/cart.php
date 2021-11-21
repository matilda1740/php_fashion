<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VV | CART </title>
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="module_page">
        <!-- <h3>Cart Page</h3> -->
        <section class="main_page_section cart_section">
            <section class="cart_details_section">
                <div class="cart_header_div">
                    <h4 class="cart_header">Product</h4>
                    <h4 class="cart_header">Quantity</h4>
                    <h4 class="cart_header">Total</h4>
                    <h4 class="cart_header"></h4>
                </div>
                <div class="each_cart_product_div">
                    <div class="cart_product_column">
                        <div class="cart_product_image_div">
                            <img src="<?php echo base_url('/assets/images/street.jpeg')?>" >
                        </div>       
                        <div class="cart_product_descr_div">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="product_price">Ksh.1800</p>
                        </div>                        
                    </div>

                    <div class="cart_product_column cart_product_qty_div">
                        <i class="fas fa-minus"></i>
                        <span>1</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="cart_product_column cart_product_total_div">
                        <span class="product_total">Ksh.1800</span>
                    </div>
                    <div class="cart_product_column cart_product_remove_div">
                        <i class="fas fa-trash"></i>                       
                    </div>
                </div>
            </section>

            <section class="cart_subtotal_section">
                <h2 class="cart_subtotal_header">Cart Summary</h2>

                <div class="cart_subtotal_row">
                    <h3>Cart Total:</h3>
                    <p>Ksh. 23,000</p>
                </div>
                <div class="cart_subtotal_row">
                    <h3>Shipping Fee</h3>
                    <p>Ksh. 23,000</p>
                </div> 

                <div class="cart_subtotal_row">
                    <select></select>
                </div>
                 <div class="cart_subtotal_row">
                    <h3>Order Subtotal:</h3>
                    <p>Ksh. 46,000</p>
                </div>  
                 <div class="cart_subtotal_row">
                    <a href="<?php echo base_url('/checkout'); ?>">Proceed To Checkout</a>
                </div>                               
            </section>            
        </section>
    </section>
</body>
</html>
