<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awesome Theme</title>
    
    <?php 
        //Load header template.
        wp_head(); 
    ?>
    
</head>
<body>
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    
