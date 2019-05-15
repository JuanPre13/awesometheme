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
    <?php
        //{is_home()} = Detects if the query for the blog homepage
        //{is_front_page()} = Determines whether the query is for the front page of the site.
        
        if(is_front_page()):
            $awesome_class = array('awesome-class','my-class');
        else:
            $awesome_class = array('no-class');  
        endif;
    ?>
            <!--call to dynamic classes -->
    <body <?php body_class($awesome_class);?>>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        <!--call my custom header -->                  <!-- Array with any arguments -->
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" 
                                          width="<?php echo get_custom_header()->width; ?>"
                                          alt=""/>

    
