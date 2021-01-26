<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="wrapper" id="wrapper-footer">
	<div class="footer-content">
		<div class="footer-brand">
			<i class="fa fa-tree"></i>
			<!-- Your site title as branding in the menu -->
			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
			<p>We're proud of our contribution towards building the future, ground up! Our landscaping company is ready to complete any kind of project for any type of commercial and residential client!</p>
		</div>
		<div class="footer-right">
			<div class="contact">
				<p class="title-top">Contact us</p>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i>Yarmouth, MA 02673</p>
					<p><i class="fa fa-envelope"></i>contact@joes.com</p>
					<p><i class="fa fa-phone"></i>(508) 776-5177</p>
			</div>

			<div class="social-media">
				<p class="title-top">Social Media</p>
				<a href="https://www.facebook.com/capelandscaping/">Facebook</a>
			</div>

			<div class="hours">
				<p class="title-top">Working hours</p>
				<p>Mon - Sat</p>
				<p>7:00AM - 6:00PM</p>
			</div>
		</div>

	</div>

	<div class="<?php echo esc_attr( $container ); ?>">
<div class="footer-copyright">
 <p>&copy;
	 <?php
	 echo date_i18n(
		 /* translators: Copyright date format, see https://www.php.net/date */
		 _x( 'Y', 'copyright date format', 'twentytwenty' )
	 );
	 ?>
	 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
	 All rights reserved | Developed</i> by <a class="dev" href="https://lucianonicacio.com" target="_blank">Luciano Nicacio</a>
 </p><!-- .footer-copyright -->

</div>
</div>

</div><!-- .footer-credits -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

