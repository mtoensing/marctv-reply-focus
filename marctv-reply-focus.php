<?php

/*
  Plugin Name: MarcTV Reply Focus Fix
  Plugin URI: http://marc.tv/blog/marctv-wordpress-plugins/
  Description: Lost focus? You need a fix!
  Version: 1.2
  Author: Marc Tönsing
  Author URI: https://marc.tv
  GitHub Plugin URI: mtoensing/marctv-reply-focus
  License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  your option) any later version.

  This software uses the galleria http://galleria.io framework which uses the MIT License.
  The license is also GPL-compatible, meaning that the GPL permits combination
  and redistribution with software that uses the MIT License.

 */

function remove_old_comment_reply()
{
    wp_deregister_script('comment-reply');
}

add_action('init', 'remove_old_comment_reply');

function add_new_comment_reply()
{
    wp_enqueue_script(
        "comment-reply-fix", WP_PLUGIN_URL . "/marctv-reply-focus/comment-reply-fix.js", false, 1.0, true);
}

add_action('wp_print_styles', 'add_new_comment_reply');
