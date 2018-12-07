<?php
/*
Plugin Name: LWA [Login With Ajax] - Top Right Content Disabler
Plugin URI: http://my-awesomeness-emporium.com
description: Disable the unwanted content when Login With Ajax is put in the top secondary menu. Note, it will require Widgets in Menus plugin
a plugin to create awesomeness and spread joy
Version: 1.0
Author: < Aperture Indigo />
Author URI: http://www.apertureindigo.com
License: GPL2
*/


add_action('wp_head', 'ai_lwa_content_disable');
function ai_lwa_content_disable(){

  $title_styles = '';
  if ( is_user_logged_in() ) {
    $title_styles = 'div #et-secondary-menu .avatar {display: none !important;}';
  }
  else {
    $title_styles = 'div #et-secondary-menu .avatar, .yawp_wim_title {display: none !important;}';
  }
  ?>

  <style>

  <?= $title_styles ?>

  div #et-secondary-menu .lwa-info a:nth-child(1),  a:nth-child(5) , br:nth-child(2), br:nth-child(4) {
    display: none !important;
  }
  </style>
  <?php
};
