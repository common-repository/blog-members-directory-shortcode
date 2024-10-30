=== Blog Members Directory shortcode ===
Contributors: dnorman
Tags: shortcode, directory, members
Requires at least: 2.6
Tested up to: 5.2.4
Stable tag: trunk

The plugin enables any page or post author to include a Blog Members directory by using a shortcode.

== Description ==

The plugin gives users the oportunity to embed a directory of Members of a site within any page.
When using the shortcode [blog_members] when 
writing in the content of any page, the user includes in the page, a 
list of all Members of that site. 

I am working on adding the ability to set options, such as hide_admin, hide_empty, etc...

== Installation ==

This section describes how to install the plugin and get it working.

1. Download the blog-members-shortcode.zip file to a directory of your 
choice(preferably the wp-content/plugins folder)

2. Unzip the blog-members-shortcode.zip file into the wordpress 
plugins directory: 'wp-content/plugins/' 

3. Activate the plugin through the 'Plugins' menu in WordPress

4. Include the [blog_members] shortcode in any page you wish to include the blog_members display.

== Frequently Asked Questions ==

= How do I use the plugin? =

When you write or edit the content of a page, simply include 
[blog_members] (along with the brackets) whenever you want the directory to 
be displayed. Make sure you activate the plugin before you use the 
shortcode.

= Why is the Members Directory not displayed, even though I included the shorttag ? =

The plugin probably has not yet been activated.

= Why does my posted content also show the shortcode [blog_members]? =

At the moment, the blog-members-directory-shortcode plugin only works when used 
in pages. The content displayed by the plugin table probably 
malfunctioned if you used the shortcode in a post.

== Screenshots ==

1. adding the shortcode to a page
2. sample blog members directory listing

== Changelog ==

= 0.1 =
* First draft of the plugin. It's not parameterizable yet, but works.

== Upgrade Notice ==

* nothing yet.