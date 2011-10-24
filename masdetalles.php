<?php
/*
Plugin Name: MasDetalles ShareBig
Version: 1.0
Description: MasDetalles ShareBig button!
Author: Ziltik 
Author URI: http://masdetalles.do
Plugin URI: http://masdetalles.do
License: describing license associated with the plugin (usually GPL2)
*/


function masdetalles_html($content) {

 if ( is_single() ) {

 $content .= '<br /><a href="http://masdetalles.do" class="md-share-vertical" style="display: block;  padding: 20px;border:none;"></a><script language="javascript" type="text/javascript" src="http://masdetalles.do/share.js"></script><br />';

 }

  return $content;
}

add_filter('the_content', 'masdetalles_html');


?>
