<?php
function ingredients_theme_support() {
    add_theme_support('title-tag');     
    add_theme_support('custom-logo');    
    add_theme_support('custom-background'); 
    add_theme_support('post-thumbnails'); //miniatures
}
add_action('after_setup_theme', 'ingredients_theme_support');
