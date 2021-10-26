<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery.js'); ?>" type="text/javascript"></script>
    <title>VV | Login Page</title>
</head>
<body>
    <?php $validation = \Config\Services::validation(); ?>
    <section class="login_section">
        <h2>Customer Log In</h2>
        <form class="login_form" id="auth_form" method="post" action="<?php site_url('/users/login_user') ?>">

            <!-- All Fields Empty Error -->
            <div id="main_form_error" class="form_error form_inputs no_display_error">
                <p>Ensure that all the fields are filled</p>
            </div>      

            <label class="form_labels" for="loginEmail">Email:</label>
            <input type="email" id="form_input" class="form_inputs" name="loginEmail" />
            <label class="form_labels" for="loginPass">Password:</label>
            <input type="password" id="form_input" class="form_inputs" name="loginPass" password="" />
    
            <button type="submit" class="form_btn ">Log In</button>
        </form>
    
        <div class="login_footer">
            <p>Are you a new user?
                <a href="<?=site_url('/users/register')?>">Sign Up</a>
            </p>
            <a class="back_home" href="<?=site_url('/')?>"><i class="fas fa-chevron-left"></i>Back Home</a>
        </div>
    </section>

</body>
</html>