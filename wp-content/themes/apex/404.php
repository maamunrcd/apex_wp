<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								<h1>404</h1>
								<p>This page Not Found!! Go to <a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a></p>
							</div>
						</div>
					</div>
				</header><!-- .page-header -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
