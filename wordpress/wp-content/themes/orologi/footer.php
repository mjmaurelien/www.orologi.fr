<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<div>

			<footer id="footer-container">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
		<div id="footer">
		  <div id="assurance" >
		    <div id="page-full-width">
		      <div class="row">
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/livraison.png" alt=""/>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/livraison.png" alt=""/>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/livraison.png" alt=""/>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/livraison.png" alt=""/>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div id="basfooter" >
		    <div id="page-full-width">
		      <div class="row">
		        <div class="small-12 large-8 columns reso">
		           <a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
		           <a href="#"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
		           <a href="#"><i class="fa fa-pinterest-square fa-3x" aria-hidden="true"></i></a>
		           <a href="#"><i class="fa fa-instagram fa-3x" ></i></a>
		        </div>
		        <div class="small-12 large-4 columns news">
		          <a href="#" class="large-12 small-12 hvr-reveal2">s'abonner à la newsletter</a>
		        </div>
		      </div>
		      <div class="row">
		        <div class="small-12 large-4 columns reso">
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		        <div class="small-12 large-4 columns reso">
		          <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		          <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		          <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		        <div class="small-12 large-4 columns reso">
		          <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		          <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		          <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>

		      </div>
		    </div>
		  </div>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script type="text/javascript">
	$('.petit_visu').hover(function(){
		$(this).find('.detail').css('top', '0');
	}, function(){
		$(this).find('.detail').css('top', '-100%');
	})
</script>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
$('#owl-carousel').owlCarousel({
			items:1,
			loop:false,
			center:true,
			margin:10,

			URLhashListener:true,
			autoplayHoverPause:true,
			startPosition: 'URLHash'
	});
$('#owl-carousel1').owlCarousel({
	    loop:true,
	    nav:true,
			nav:false,
			autoplay:true,
			autoplayTimeout:6000,
			items:4,

	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:6
	        }
	    }
})
$('#owl-carousel2').owlCarousel({
	    loop:true,
	    nav:true,
			nav:false,
			items:1,
			autoplay:true,
			autoplayTimeout:4000,

	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:1
	        }
	    }
})
</script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
