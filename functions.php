<?php // this must be the ..func ?>

<?php

// reg + init menus

function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Nav' ),
      'secondary-menu' => __( 'Secondary Nav' ),
      'footer-menu' => __( 'Footer Nav' )
     )
   );
 }
 add_action( 'init', 'register_menus' );

 // hide admin bar

if(get_current_user_id() == 1) {
	show_admin_bar(false);
}

?>