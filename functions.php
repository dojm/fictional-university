<?php

// wp_enqueue_scripts - we want to load css or js files
// function we create - function that contains the files we wanna load


function university_files()
{
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');
