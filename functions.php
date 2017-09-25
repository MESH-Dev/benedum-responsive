<?php

//Add all custom functions, hooks, filters, ajax etc here

include('functions/start.php');
include('functions/cpt.php');
include('functions/clean.php');

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
		    </style>';
}


//Add/Change excerpt
function new_excerpt_more( $more ) {
    if (is_home()){
       return '...  <div class="read-more"><a class="cta-link" href="' . get_permalink( get_the_ID() ) . '"><span>' . __( 'Read More', 'your-text-domain' ) . '</a></span></div>'; 
    }else{
  
  return '... <div class="read-more"><a href="'.get_permalink( get_the_ID() ).'">Read More</a></div>';
}
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>
