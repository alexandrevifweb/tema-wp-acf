<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<div class="row">
			<div class="site-info col-sm-6">
				<div class="copyright-text">
					<?php echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
				</div>
				<div class="footer-credits">
					<?php shapely_footer_info(); ?>
				</div>
			</div><!-- .site-info -->
			<div class="col-sm-6 text-right">
				<?php shapely_social_icons(); ?>
			</div>
		</div>
	</div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>




		<script>
			$('.slides').slick({
				infinite: true,
				arrows: false,
				slidesToShow: 1
			});

			$('.next-arrow').on('click', function(){
		  	$('.slides').slick('slickNext');
			});
			$('.prev-arrow').on('click', function(){
				$('.slides').slick('slickPrev');
			});






			$('.center').slick({
			  centerMode: true,
			  centerPadding: '60px',
			  slidesToShow: 3,

			  responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 3
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    }
			  ]
			});

		</script>

		
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
