<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <title>VV | Register Page</title>
</head>
<body>
    <section class="login_section registeration_parent">
        <h2>Customer Sign Up</h2>
        <form class="registration_form" method="post" action="<?= site_url('Users/handleRegister') ?>">
            <label class="form_labels" for="registerFname">First Name:</label>
            <input type="text" class="form_inputs" name="registerFname" />
            <label class="form_labels" for="registerLname">Last Name:</label>
            <input type="text" class="form_inputs" name="registerLname" />
            <label class="form_labels" for="registerGender">Gender:</label>
            <select class="form_inputs" name="registerGender">
                <option value="female" defaultValue>Female</option>
                <option value="male">Male</option>
            </select>
            <label class="form_labels" for="registerEmail">Email:</label>
            <input type="email" class="form_inputs" name="registerEmail" />
            <label class="form_labels" for="registerPass">Password:</label>
            <input type="password" class="form_inputs" name="registerPass" />
            <label class="form_labels" for="registerConfirmPass">Confirm Password:</label>
            <input type="password" class="form_inputs" name="registerConfirmPass" password="" autoComplete="new-password" />
    
            <button type="submit" class="form_btn ">Sign Up</button>
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