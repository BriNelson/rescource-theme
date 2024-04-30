<?php
/*
Template Name: Webdev News
*/
?>

<?php get_header(); ?>

<div class="body-wrapper">
	<div class="webdev-resources-wrapper">
		<div class="resource-library-heading">
			<h1>Web Development</h1>
			<nav>
				<?php
				wp_nav_menu(

					array(

						'theme_location' => 'webdev-resource-menu',
						'menu_class' => 'resource-menu webdev-resource-menu',
					)


				);
				?>
			</nav>
			<h2>News Sources</h2>
<!----------------- big slider Start ----------------->
			<div class="big-slider">
				<div class="swiper mySwiper2">
					<div class="swiper-wrapper">
						<?php
						$args = array(

							'post_type' => 'resources',
							'post_status' => 'publish',
							'category_name' => 'big-slider'

						);



						$fourth_loop = new WP_Query($args);


						if ($fourth_loop->have_posts()):
							while ($fourth_loop->have_posts()):
								$fourth_loop->the_post(); ?>



								<div class="swiper-slide">
									<div class="big-slide">
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
										<?php endif; ?>

										<div class="big-slider-content">
											<h3><?php the_title(); ?></h3>
											<?php the_content(); ?>
										</div>
										<!-- end of content -->
									</div>
									<!-- big slide -->

								</div>
								<!-- end of slide  -->


							<?php endwhile; else: endif; ?>



					</div>
					<!-- end of swiper wrapper -->
				</div>
				<!-- end of swiper -->
			</div>
			<!-- end of big slider -->
			<div class="swiper-pagination"></div>
		</div>
		<!-- end of resource library heading -->


		<!------------------- web dev news grid --------------------->



		


			<div class="resource-grid-wrapper">


				
					
					

					


						<?php

						$args = array(

							'post_type' => 'resources',
							'post_status' => 'publish',
							'category_name' => 'news-sources-web-development',
							'posts_per_page' => -1

						);



						$loop = new WP_Query($args);


						if ($loop->have_posts()):
							while ($loop->have_posts()):
								$loop->the_post(); ?>

						
							<div class="card">


								<?php if (has_post_thumbnail()): ?>
								<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
								<?php endif; ?>


								<h4>
									<?php the_title(); ?>
								</h4>
								<?php the_content(); ?>
								<a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More
									→</a>

							</div>
						
						<?php endwhile; else: endif; ?>



					

				
			</div> <!-- row end -->






			




			











		

	</div><!-- webdev-resources-wrapper end -->
</div><!-- body wrapper end -->



<?php get_footer(); ?>