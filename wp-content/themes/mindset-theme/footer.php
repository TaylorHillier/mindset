<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-contact">
			
		</div><!-- .footer-contact -->
		<div class="footer-menus">
			<nav class="footer-navigation">
				<?php wp_nav_menu(array('theme_location' => 'footer-left'))?>
				<?php 
				if (!is_page('16')) {
					$address = get_field('address_contact', '16');
					$email = get_field('email_contact', '16');
					get_template_part('images/location');
					echo '<div class="footer-address">' . esc_html($address) . '</div>';
					echo '<a href="mailto:' . esc_attr($email) . '" class="footer-email">' . esc_html($email) . '</a>';
				} ?>
			</nav>	
			<nav class="footer-navigation">
				<?php wp_nav_menu(array('theme_location' => 'footer-right'))?>
				<a href="<?php echo esc_url(get_privacy_policy_url()); ?>"><?php esc_html_e('Privacy Policy', 'fwd')?></a>
			</nav>	
		</div><!-- .footer-menus -->
		<div class="site-info">
			<?php esc_html_e( 'Created by ', 'fwd' ); ?><a href="<?php echo esc_url( __( 'https://wp.bcitwebdeveloper.ca/', 'fwd' ) ); ?>"><?php esc_html_e( 'Jonathon Leathers', 'fwd' ); ?></a>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
