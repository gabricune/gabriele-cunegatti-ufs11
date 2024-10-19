
 

<?php
 /**
  * commento
  *riga
  *multipla
  *
  */
 
 if ( ! function_exists( 'setup') ){
     function setup (){
require get_template_directory () . '/inc/assets.php';   
}
}

add_action('after_setup_theme', 'setup');

    if (class_exists('acf') ) {
        function register_acf_blocks(){
            register_block_type(__DIR__ .'/acf-blocks/carousel');
            register_block_type(__DIR__ .'/acf-blocks/card');
            register_block_type(__DIR__ .'/acf-blocks/popup');
            register_block_type(__DIR__ .'/acf-blocks/accordion');
        }
        add_action( 'init' , 'register_acf_blocks');
    };

 // Registrazione dei blocchi personalizzati

    
// Registrazione dei blocchi personalizzati



