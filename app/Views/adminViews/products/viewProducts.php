<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/admin.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <!-- CLIENT SIDE FORM VALIDATION -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery.js'); ?>" type="text/javascript"></script>    
</head>
<body>
    <section class="dashboard_section">
        <a  href="<?php echo site_url('/admin/add_products') ?>">
            <i class="fas fa-plus-circle"></i>
            <p>Add Product</p>
        </a>
    </section>
</body>
</html>