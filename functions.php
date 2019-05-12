<?php
    // Standard function 
    function awesome_script_emqueue(){

        //Enqueue a script   css
        wp_enqueue_style('customstyle', //name 
                            get_template_directory_uri() . '/css/awesome.css', //get the absolute pat
                            array(), //dependence array 
                            '1.0.0', //String specifying script version number, 
                            'all');
        wp_enqueue_script('customstyle', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
    }
    //Hooks a function on to a specific action.
    //conects from the action to custom function
    add_action('wp_enqueue_scripts', 'awesome_script_emqueue');// connects wp execution process to a custom functions or when specific event occurs
    
    function awesome_theme_setup(){
        //Registers theme support for a given feature.
        add_theme_support('menus');
                                    //description
        register_nav_menu('primary', 'Header Navigation');  
        register_nav_menu('secondary', 'Footer Navigation');  
    }
    add_action('init', 'awesome_theme_setup');