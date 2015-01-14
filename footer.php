<table id="FooterTable">
<tr>
<td id="TableBox-f1">
<div class="QueueFooter">
This is a footer area for as much space that is needed. It will break once text gets too long and it starts getting confusing. 1
</div>
</td>
<td id="TableBox-f2">
<div class="QueueFooter">
This is a footer area for as much space that is needed. It will break once text gets too long and it starts getting confusing. 2
</div>
</td>
<td id="TableBox-f3">
<div class="QueueFooter">
This is a footer area for as much space that is needed. It will break once text gets too long and it starts getting confusing. 3
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
<div id="baseline">
<div class="BaseCredits">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'Queue' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?><br />
<?php echo sprintf( __( ' Theme By: %1$s.', 'Aspects Web Design' ), '<a href="http://aspectswebdesign.com/">Aspects Web Design</a>' ); ?>
</div>
<div class="SIcons">
This is for the social Media Icons
</div>
<div class="foot_menu" id="tabs-foot">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
