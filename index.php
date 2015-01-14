<?php
/**
 * The main template file.
 *
 * This is the generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Queue
 */

get_header(); ?>
for Long ad widget to be included. This is an area that you will have to select an image from the gallery or find a way to include an input so that people just have to put in their AD code. Kinda tricky.
</div>
<div class="main_menu" id="tabs-main">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>
<div class="maincontain">
	<div class="sidebar_left">
Left sidebar
<?php get_sidebar( 'sidebar-left' ); ?>
	</div>
	<div class="sidebar_right">
right sidebar
<?php get_sidebar( 'sidebar-right' ); ?>
	</div>
This is the next part, the main contain section
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?><br />
</div>
<div class="ExtraWidgets">
<div class="WidgetControl">
<table id="WidgetTable">
<tr>
<td id="TableBox1">
<div class="wBoxed">
<?php get_sidebar( 'First Main Widget Area'); ?>
</div>
</td>
<td id="TableBox2">
<div class="wBoxed">
This is a widget area located in the middle of the page. The area is being controlled by a table. 
</div>
</td>
<td id="TableBox3">
<div class="wBoxed">
This is a widget area located in the middle of the page. The area is being controlled by a table. It will break once text gets too long and it starts getting confusing.
</div>
</td>
</tr>
</table>

Above is a WIDGETIZED area for as much space that is needed. It will break once text gets too long and it starts getting confusing.
</div>
</div>
<br />
<!-- Footer Area -->
<div class="queuefeet">
<div class="FooterControl">
<?php get_footer(); ?>
