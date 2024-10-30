<?php
/*
Plugin Name: BlogMembersShortcode
Plugin URI: 
Description: This plugin provides a [blog_members] shortcode to let you embed a Blog Members Directory on your site without having to fuss around with page templates.
Version: 0.1
Author: D'Arcy Norman
Author URI: http://www.darcynorman.net
*/
 
/*
== Installation ==
 
1. Download the BlogMembersShortcode.zip file to a directory of your choice(preferably the wp-content/plugins folder)
2. Unzip the BlogMembersShortcode.zip file into the wordpress plugins directory: 'wp-content/plugins/'
3. Activate the plugin through the 'Plugins' menu in WordPress
*/
 
/*
/--------------------------------------------------------------------\
|                                                                    |
| License: GPL                                                       |
|                                                                    |
| BlogMembersShortcode - brief description                           |
| Copyright (C) 2009, D'Arcy Norman & The University of Calgary      |
| All rights reserved.                                               |
|                                                                    |
| This program is free software; you can redistribute it and/or      |
| modify it under the terms of the GNU General Public License        |
| as published by the Free Software Foundation; either version 2     |
| of the License, or (at your option) any later version.             |
|                                                                    |
| This program is distributed in the hope that it will be useful,    |
| but WITHOUT ANY WARRANTY; without even the implied warranty of     |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the      |
| GNU General Public License for more details.                       |
|                                                                    |
| You should have received a copy of the GNU General Public License  |
| along with this program; if not, write to the                      |
| Free Software Foundation, Inc.                                     |
| 51 Franklin Street, Fifth Floor                                    |
| Boston, MA  02110-1301, USA                                        |   
|                                                                    |
\--------------------------------------------------------------------/
*/

/**
 * Creation of the BlogMembersShortcode
 * This class should host all the functionality that the plugin requires.
 */
/*
 * first get the options necessary to properly display the plugin
 */



if ( !class_exists( "BlogMembersShortcode" ) ) {
    
    class BlogMembersShortcode {

        /**
         * Shortcode Function
         */
         function shortcode($atts)
         {

      		$out = "";

			$out .= '<div id="blog_members_list">
						<ul>';
			
			// do something intelligent to pull attributes to set up the parameters properly, with defaults. (not working yet. deal with it.)
			$listparams = 'show_fullname=1&optioncount=1&exclude_admin=0&feed=RSS&hide_empty=1&echo=0';
			
			$out .= wp_list_authors($listparams);
			$out .='			</ul>
						</div>';
            
            return $out;
         }
    } // End Class BlogMembersShortcodePluginSeries
} 


/**
 * Initialize the admin panel function 
 */

if (class_exists("BlogMembersShortcode")) {

    $BlogMembersShortcodeInstance = new BlogMembersShortcode();
}


/**
  * Set Actions, Shortcodes and Filters
  */
// Shortcode events
if (isset($BlogMembersShortcodeInstance)) {
    add_shortcode('blog_members',array(&$BlogMembersShortcodeInstance, 'shortcode'));
}
?>
