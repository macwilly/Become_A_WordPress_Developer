<?php

function university_files(){
    wp_enqueue_style("university_main_styles", get_stylesheet_uri());
}
//add_action({type of instructions we are give to WP}, {name of function} );
add_action("wp_enqueue_scripts", "university_files");