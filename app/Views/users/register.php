<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VV | Register Page</title>
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <!-- CLIENT SIDE FORM VALIDATION -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery.js'); ?>" type="text/javascript"></script>    
</head>
<body>
    <?php $validation = \Config\Services::validation(); ?>
    <section class="login_section registeration_parent">
<?php
if (isset($_SESSION['key_generate']) && $_SESSION['key_generate']) {
?>        
            <div class="user_alerts success no_alerts">
                <!-- ALERT MESSAGE -->
                <i class="far fa-check-circle"></i>

                <p><?= $this->session->flashdata('message');?></p>
            </div>  
 <?php
}
?>                  
        <h2>Customer Sign Up</h2>


        <form class="registration_form" id="auth_form" method="post" action="<?php echo base_url('/users/register_user') ?>">

            <!-- All Fields Empty Error -->
            <div id="main_form_error" class="form_error form_inputs no_display_error">
                <p>Ensure that all the fields are filled</p>
            </div>                              

            <label class="form_labels" for="registerFname">First Name:</label>
            <input type="text" class="form_inputs" name="registerFname" id="registerFname"/>

            <label class="form_labels" for="registerLname">Last Name:</label>
            <input type="text" class="form_inputs" name="registerLname" id="registerLname"/>

            <label class="form_labels" for="registerGender">Gender:</label>
            <select class="form_inputs"  name="registerGender" id="registerGender">
                <option value="female" defaultValue>Female</option>
                <option value="male">Male</option>
            </select>
            <label class="form_labels" for="registerEmail">Email:</label>
            <input type="email" class="form_inputs" name="registerEmail" id="registerEmail"/>
          
            <label class="form_labels" for="registerPass">Password:</label>
            <input type="password" class="form_inputs" name="registerPass" id="registerPass"/>
            
            <label class="form_labels" for="registerConfirmPass">Confirm Password:</label>
            <input type="password" class="form_inputs" name="registerConfirmPass" id="registerConfirmPass" password="" autoComplete="new-password" />
            <button type="submit" class="form_btn" id="register_btn">Sign Up</button>
        </form>
        <div class="login_footer">
            <p>Already have an account?
                <a href="<?=site_url('/users/login')?>"> Sign In</a>
            </p>
            <p>
                <a href="<?=site_url('/')?>"><i class="fas fa-chevron-left"></i>Back Home</a>
            </p>
        </div>
    </section>
</body>
</html>