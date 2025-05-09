<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Acme Themes
 * @subpackage Education Base
 */
get_header();
$education_base_customizer_all_values = education_base_get_theme_options();
?>
<div class="wrapper inner-main-title">
	<div class="container">
		<header class="entry-header init-animate slideInUp1">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'education-base' ); ?></h1>
			<?php
			if ( 1 == $education_base_customizer_all_values['education-base-show-breadcrumb'] ) {
				education_base_breadcrumbs();
			}
			?>
		</header>
	</div>
</div>
<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'education-base' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
