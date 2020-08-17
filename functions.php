<?php
/** this file will run on every page load from your template.
*it can be , for example, useed to calculate values that we will need to render pages
*in our template
*
*
* Enqueue theme stylesheets and scripts
*
*/

add_action( "wp_enqueue_scripts", function() {
    wp_enqueue_script(
        "sandbox-theme-scripts", // a new name for this script file
        get_theme_file_uri("/assets/js/scripts.js"), // URL or PAth to the script
        array(), // we use this to add dependencies. eg array("react") will not run the script without react being present
        strftime( get_theme_file_uri("assets/js/scripts.js")), // this keepts track of if the script has been updated to make sure caching does not use an old version
        FALSE // output in the footer? (before the </body> closing tag)
    );
    
    wp_enqueue_style(
        "sandbox-theme-styles",
        get_theme_file_uri("/assets/css/main.css"),
        array(),
        strftime( get_theme_file_uri("/assets/css/main.css") ),
        "all" // set the type of stylesheet (media query) this is
    );

});

/**
 * note that you can also enqueue functions into other parts like the header/footer
 * eg: add_action( "wp_head", function() {})
 */

 register_nav_menus( // here we MUST reister navigation menus so WP knows about them
     array( // an array of 'menu IDs' key and 'plain english names' values. 
         "main_menu" => "Main Menu"
     )
    );
?>