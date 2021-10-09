<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" media="screen" href = "<?php echo base_url('/assets/css/style.css'); ?>"/> 
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <title>VV | Display Page</title>
</head>
<body>
    <h3>USERS</h3>
<?php
if (isset($_SESSION['key_generate']) && $_SESSION['key_generate']) {
?>
    <h3><?php echo $_SESSION['key_generate'] ?></h3>
    <?php 
    foreach($_SESSION['userInfo'] as $key => $user){
        
    ?>

    <h3><?php echo $key . " " . $user ?></h3>

    <?php
    } 
    
    ?>
    <h3><?php echo $_SESSION['fullname'] ?></h3>

 <?php     
} 
?>

</body>
</html>