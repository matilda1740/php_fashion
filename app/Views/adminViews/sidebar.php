<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VV | ADMIN HOME</title>
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/admin.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <!-- CLIENT SIDE FORM VALIDATION -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery.js'); ?>" type="text/javascript"></script>    
</head>
<body>
    <!-- <section class="admin_main_body"> -->
        <section class="admin_sidebar">
            <div class="sidebar_top">
                <div class="profile_pic">
                    <img src="<?php echo base_url('/assets/images/avatar_placeholder.png'); ?>" alt="Avatar" />
                </div>
                <div class="profile_dets">
                    <p class="email">crazyjerry@gmail.com</p>
                    <p class="status"><i class="fas fa-circle"></i>Online</p>          
                </div>
            </div> 
            
            <div class="sidebar_bottom">
                <a class="sidebar_parts" href="<?php echo site_url('/admin/dashboard') ?>">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
                <a class="sidebar_parts" href="<?php echo site_url('/admin/orders') ?>">
                    <i class="fas fa-shopping-bag"></i>
                    <p>Orders</p>
                </a> 
                <a class="sidebar_parts" href="<?php echo site_url('/admin/products') ?>">
                    <i class="fab fa-product-hunt"></i>
                    <p>Products</p>
                </a> 
                <p class="sidebar_parts">
                    <i class="fas fa-gem"></i>
                    <a href="/">Promotions</a>
                </p>                                  
                <p class="sidebar_parts">
                    <i class="fas fa-users"></i>
                    <a href="/admin/customers">Customers</a>
                </p>
                <p class="sidebar_parts">
                    <i class="fas fa-users-cog"></i>
                    <a href="/admin/team">Cafe Kora Team</a>
                </p>
                <p class="sidebar_parts">
                    <i class="fas fa-chart-bar"></i>
                    <a href="/admin/add_products">Analysis</a>
                </p>
                <p class="sidebar_parts">
                    <i class="fas fa-globe"></i>
                    <a href="/">Website Home</a>
                </p> 
                <p class="sidebar_parts">
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="/">Log Out</a>
                </p>                             
            </div>
        </section>
    <!-- </section> -->
</body>
</html>