<?php

/**

 * UCSC Global Styles

 * This file enqueue's UCSC's Global Styles.

 */

function ucsc_enqueue_styles(){
  wp_enqueue_style('ucsc-global', 'https://static.ucsc.edu/_responsive/css/ucsc.css?t=20210503230646');
  wp_enqueue_style('ucsc-rebrand', 'https://static.ucsc.edu/_responsive/css/2021-rebrand.css');
}
add_action( 'wp_enqueue_scripts', 'ucsc_enqueue_styles' );