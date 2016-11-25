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
		<section class="footer text-center">
			<div class="row text-left" id="petit">
				<div class="large-4 small-12 columns">
					<h4><i class="fa fa-map-o" aria-hidden="true"></i> Plan du site :</h4>
					<a href="<?php echo get_page_link(4); ?>"><p>Commerçants</p></a>
					<a href="<?php echo get_page_link(36); ?>"><p>Localisation</p></a>
					<a href="<?php echo get_page_link(23); ?>"><p>Offres</p></a>
					<a href="<?php echo get_page_link(39); ?>"><p>A propos</p></a>
				</div>
				<div class="large-4 small-12 columns">
				 <h4><i class="fa fa-clock-o" aria-hidden="true"></i> Horaires d'ouverture</h4>
					<a id="time" href="<?php echo get_page_link(42); ?>"><p>Consulter les horaires</p></a>
					<h4><i class="fa fa-map-marker" aria-hidden="true"></i>
 Nous trouver</h4>
					<a href="<?php echo get_page_link(36); ?>"><p>Route du Rhin CS 70140 67503 Haguenau Cedex</p></a>
				</div>
				<div class="large-4 small-12 columns">
					 <h4><i class="fa fa-credit-card" aria-hidden="true"></i> Mentions légales</h4>
					<a href="<?php echo get_page_link(32); ?>"><p>Consulter les mentions</p></a>
					<h4><i class="fa fa-envelope-o" aria-hidden="true"></i> Nous contactez</h4>
				 <a href="mailto:ha@cora.fr"><p>Email : ha@cora.fr</p></a>
				</div>
			</div>

		</section>
	<!--	<section class="perso">
						<div class="col-lg-12 text-center">
							 <p><span><a href="http://aurelien-ruch.com/" target="_blank">www.aurelien-ruch.com&copy;</a></span></br>designé par aurélien ruch tous droits réservés</p>
						 </div>
		</section>-->






		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>
<script type="text/javascript">
	$('.petit_visu').hover(function(){
		$(this).find('.detail').css('left', '0');
	}, function(){
		$(this).find('.detail').css('left', '-100%');
	});
	$('.petit_visu').hover(function(){
		$(this).find('.detail-offres').css('top', '0');
	}, function(){
		$(this).find('.detail-offres').css('top', '-100%');
	});
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
			autoplayTimeout:6000,


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



if ( $( ".entry-summary" ).length ) {

	$('.sidebar').remove()
	$('.row .small-12').removeClass('large-8')

}
</script>
<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
