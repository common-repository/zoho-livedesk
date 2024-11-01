<?php

ob_start();

/*
Plugin Name: Zoho LiveDesk
Plugin URI: http://wordpress.org/plugins/zoho-livedesk/
Description: With Zoho LiveDesk you can instantly connect to your customers and deliver instant support
Author: LiveDesk Team
Version: 1.0.1
Author URI: http://zoho.com/livedesk
*/



add_action('admin_menu', 'ld_menu');   


function ld_menu() {
  

   add_menu_page('Account Configuration', 'LiveDesk', 'administrator', 'LD_dashboard', 'LD_dashboard',plugins_url().'/zoho-livedesk/favicon.ico', '79');
    

  }


function LD_dashboard() {
include ('livedesk.php');
}




function ld_embedchat()
{

	echo get_option('ldcode');	
}


add_action("wp_footer","ld_embedchat", 5);

?>



