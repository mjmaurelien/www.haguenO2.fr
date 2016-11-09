<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="pagpe1">
	<article class="main-content">
	<!--<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>-->





	</article>
</div>


<section>
	<div class="row slide" id="front-heros" >

</div>
</section>

<section id="commercant">
 <div class="row">
	<div class="large-12 columns text-center">
			<h2>les commerçants</h2>
			<hr class="light">
	</div>
	</div>
<!--<div class="row">

			<fieldset class="large-12 columns text-center">
				<input id="checkbox1" type="checkbox"><label for="checkbox1">Distribution</label>
				<input id="checkbox2" type="checkbox"><label for="checkbox2">équipement maison</label>
				<input id="checkbox3" type="checkbox"><label for="checkbox3">Loisirs</label>
				<input id="checkbox4" type="checkbox"><label for="checkbox4">Restauration</label>
				<input id="checkbox5" type="checkbox"><label for="checkbox5">Services</label>
			</fieldset>

	</div>-->
		<div class="container-fluid" id="petit">
				<div class="row logo">
							 <!--<div class="large-3 small-12 columns com wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.5s">
								<a href="http://www.cora.fr/haguenau/" target="_blank" class="portfolio-box">
										<img src="img/cora/21.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
														<div class="project-category text-faded">
															cora haguenau

														</div>
														<div class="project-name">
																accéder au site
														</div>
												</div>
										</div>
								</a>
						</div>-->



						<div class="small-12 large-12 columns ">
							<div class="row">

								<?php
									$args = array( 'post_type' => 'magasin', 'posts_per_page' => 22, 'orderby' =>'date','order' => 'DESC' );
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
									$url = $thumb['0'];
								?>


									<div class=" large-3 medium-6 small-12 columns visu_tow fadeIn">
										<div class="petit_visu">
													<a href="<?php the_field('lien_url')?>" target="_blank" class="detail">
												<div>
													<h2><?php the_title(); ?></h2>
													<hr>
													<p>accéder au site</p>
												</div>
													</a>
											<img src="<?php echo $url ?>" alt=""/>
										</div>
									</div>


							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
							</div>
						</div>

				</div>
		</div>
</section>

<section id="find" class="background_blue">
		<div class="container-small mapcontainer wow fadeIn " data-wow-duration="2s" data-wow-delay="1s" id="petit">
				<div class="row">
						<div class="large-12 columns  text-center">
								<h2 class="section-heading blanc">Pour nous trouvez</h2>
								<hr class="light">
						</div>
				</div>
				<div class="row">
					<div class="large-12 small-12 columns text-center map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.8830729534325!2d7.833954751337517!3d48.80321021244262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796eae2e779feab%3A0x3f8a5a2aa01e6fc5!2sCora+Haguenau!5e0!3m2!1sfr!2sfr!4v1463986878069" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
		</div>
</section>

<!--
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section id="offre" class="widow">
	<div id="petit" class="container-small">
	<div class="row">
		<div class="large-12 small-12 columns text-center">
		<h2><?php the_title(yyyy); ?></h2>
		<hr class="light">
		</div>
	</div>


			 <div class="row slide_projet">
				 <div class="small-12 large-8 columns visuel owl-carousel " id="owl-carousel">

					 <?php
						 $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
						 $loop = new WP_Query( $args );
						 while ( $loop->have_posts() ) : $loop->the_post();
						 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						 $url = $thumb['0'];
					 ?>



					 <div class="item" data-hash="<?php the_ID() ?>">
						 <div class="large-12 small-12 columns visu_one">
							 <div class="visu">
								 <img src="<?php echo $url ?>" alt=""/>
							 </div>
							 <a href="http://localhost/www.haguen02.fr/index.php/offres/" class="button large-12 small-12 hvr-reveal">En savoir plus</a>

						 </div>

					 </div>

				 <?php endwhile; ?>
				 <?php wp_reset_query(); ?>
				 </div>

			 <div class="small-12 large-4 columns ">
				 <div class="row">

					 <?php
						 $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
						 $loop = new WP_Query( $args );
						 while ( $loop->have_posts() ) : $loop->the_post();
						 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						 $url = $thumb['0'];
					 ?>

					 <div class=" large-6 small-6 columns visu_tow no-gutter">
						 <div class="petit_visu">
							 <a href="#<?php the_ID() ?>">
								 <div class="detail-offres">
									 <h2><?php the_title(); ?></h2>
									 <hr>
									 <a href="#<?php the_ID() ?>" class="expanded button btndetail">Voir plus</a>
								 </div>
							 </a>
							 <img src="<?php echo $url ?>" alt=""/>
						 </div>
					 </div>

				 <?php endwhile; ?>
				 <?php wp_reset_query(); ?>
				 </div>
			 </div>
		 </div>

	 </section>


 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>

-->

	 <?php do_action( 'foundationpress_before_content' ); ?>
	 <?php while ( have_posts() ) : the_post(); ?>

	   <section id="about" class="widow">
	  		<div class="container-small" id="petit">
	  				<div class="row">
	  						<div class="col-lg-8 col-lg-offset-2 text-center">
	  								<h2 class="section-heading bleu"><?php the_title(); ?></h2>
	  								<hr class="light">

	                 <div class="text-norm">
	                     <?php the_content(); ?>
	                 </div>
	  						</div>
	  				</div>
	  		</div>
	  </section>


	 <?php endwhile;?>

	 <?php do_action( 'foundationpress_after_content' ); ?>








</div>

<?php get_footer();
