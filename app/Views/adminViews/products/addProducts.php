<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/admin.css'); ?>"/> 
        <link rel = "stylesheet" media="screen" href = "<?php echo base_url('assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <!-- CLIENT SIDE FORM VALIDATION -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery.js'); ?>" type="text/javascript"></script>    
</head>
<body>
    <section class="admin_right">
        <section class="update_section up_prod"> 
            <!-- <div class="user_alerts success">
                <p></p>
            </div> -->

            <h2 class="add_prod_title">VV Fashion Add Product</h2>

            <form class="update_column add_product_form">
                <div class="update_left registration_form">
                    <label class="form_labels">Upload Product Photo:</label>
                    <img id="display_userImage" src="<?php echo base_url('/assets/images/avatar_placeholder.png'); ?>"  alt="Upload" />	
        
                    <input 
                        type="file" class="form_inputs" name="product_image" accept="image/*"/> 
                </div>

                <div class="update_right registration_form">
                    <div class="form_error form_inputs">
                        <p>{error}</p>
                    </div> 
                    <label class="form_labels">Product Name:</label>
                    <input
                    type="text" class="form_inputs" name="product_name"/>
                    <label class="form_labels">Product Description:</label>
                    <input type="text" class="form_inputs" name="product_descr" />
                    <label class="form_labels">Product Category:</label>
                    <select class="form_inputs" id="product_cat">
                        <option value="" disabled defaultValue>"Select Category:"</option>
                        <option value="breads">Bread</option>
                        <option value="pastries">Pastry</option>
                    </select>
                    <label class="form_labels">Product Price:</label>
                    <input type="text" class="form_inputs" name="product_price" />
                    
                    <button type="submit" class="form_btn">Add Product</button>

                </div>                
            </form>

            <div class="login_footer back_home_div add_footer">
                <Link to="/admin/products"><Cancel />Cancel</Link>
                <Link to="/admin"><Home />Back to Admin Home</Link>

            </div>
        </section>  
    </section>
</body>
</html>