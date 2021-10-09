<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VV | HOME </title>
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- HEADER -->
    <section class="header_section">
        <div class="header_left_section">
            <!-- LOGO -->
            <img src="/assets/images/logo-removebg-preview.png" alt="Logo">
        </div>

        <div class="header_mid_section">
            <a href="/index.php"><i class="fas fa-home"></i>Home</a>
            <a href="/allProducts.html" class=
            "drop_menu_reveal"><i class="fas fa-shopping-bag"></i>Shop</a>
            <a href="/wishlist.html"><i class="far fa-heart"></i>Wishlist</a>
            <a href="/cart.html"><i class="fas fa-shopping-cart"></i>Cart</a>
        </div>

        <div class="header_right_section">
<?php
if (isset($_SESSION['key_generate']) && $_SESSION['key_generate']) {
?>
        <div class="hr_button">
            <a href="<?= site_url('Users/profile') ?>">
                <i class="fas fa-user-circle"></i>Welcome, <?php echo $_SESSION['greetname'] ?></a>
            <p> / </p>
            <a href="<?= site_url('Users/logout') ?>"><i class="fas fa-door-open"></i>Logout</a>
        </div>
 <?php
}else {
?>

            <div class="hr_button">
                <a href="<?=site_url('/users/register')?>"><i class="fas fa-sign-in-alt"></i>Sign Up</a>
                <p> / </p>
                <a href="<?=site_url('/users/login')?>">Sign In</a>
            </div>
 <?php     
} 
?>


        </div>
    </section>
</body>

</html>
