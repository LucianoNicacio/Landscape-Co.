<?php
/**
 * Template Name: home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('front');
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper front-page" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						
					}
					?>

					<section class="specialties container fade-in">
						<div class="title">
							<h2>What we Specialize in.</h2>
						</div>
						<div class="cards">
							<div class="card">
								<i class="fa fa-tools"></i>
								
								<h3>Tradition. Innovation. Performance</h3>
								<p>Quality you deserve and dependability you can count on.</p>
							</div>
							<div class="card">
								<i class="fa fa-suitcase"></i>
								<h3>Experience and Reputation.</h3>
								<p>It’s the proof we are the best for your project needs.</p>
							</div>
							<div class="card">
								<i class="fa fa-usd"></i>
								<h3>Full service and Affordable Price.</h3>
								<p>We provide the best services at the most affordable price.</p>
								</div>
							</div>
					</section>

					<section class="services fade-in">
						<div class="title">
							<h3>Our landscaping company is ready to complete any kind of project:</h3>
						</div>

						<!-- acf repeater fields -->
						<?php if(have_rows('services')):?>
                            <ul class="list-service">
							  	<?php while( have_rows('services')): the_row();?>
							      <li class="list-items"><i class="fas fa-circle"></i>
								  <?php the_sub_field('service'); ?>
								</li>
								  
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</section>

					<section class="work-with-us container fade-in">
						<div class="title">
							<h2>Why work with us?</h2>
						</div>
						<div class="cards">
							<div class="card">
							<i class="fa fa-paint-brush"></i>
								
								<h3>Creative Design</h3>
								<p>Our expert craftsmen can transform your outdoor space into a ‘wow’ space. We have the experience and know-how to design and build the perfect outdoor landscape.</p>
							</div>
							<div class="card">
								<i class="fa fa-people-carry"></i>
								<h3>Thoughtful Installation</h3>
								<p>We serve both commercial and residential customers, and are a full service design, installation and landscape maintenance company</p>
							</div>
							<div class="card">
								<i class="fa fa-image"></i>
								<h3>Beautiful Landscapes</h3>
								<p>We understand that each part of a well-designed landscape has its own function. Let us create a landscape for your home or business that is just right for you and your property.</p>
								</div>
							</div>
					</section>

					<div class="get-a-quote">
						<h2>Let’s get Started.</h2>
						<p>Get a quote from the service that you want and you can expect to receive a response within 1-2 Business Days.</p>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><button type="button" class="btn btn-dark active"> Get a Quote</button></a>
					</div>
					
					

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
