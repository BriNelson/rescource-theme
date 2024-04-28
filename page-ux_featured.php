<?php
/*
Template Name: UX Featured
*/
?>

<?php get_header(); ?>



<?php
$test = "Iconography" // this needs to be fixed
  ?>

<div class="body-wrapper">
  <div class="ux-resources-wrapper">
    <div class="resource-library-heading">
      <h1>UX Design</h1>
      <nav>
        <?php
        wp_nav_menu(

          array(

            'theme_location' => 'resource-menu',
            'menu_class' => 'resource-menu',
          )


        );
        ?>
      </nav>
      <h2>Featured Resources</h2>

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


    <!------------------- Research & Development --------------------->



    <div class="resource-sliders-wrapper">


      <div class="resource-row-wrapper">


        <div class="swiper mySwiper">
          <div class="category-heading-wrapper">
            <h3>Research & Testing</h3>
            <div class="control-wrapper">
              <div class="swiper-button-prev"></div>
              <div class="counter-test"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <hr>

          <div class="swiper-wrapper">


            <?php

            $args = array(

              'post_type' => 'resources',
              'post_status' => 'publish',
              'category_name' => 'research-and-testing'

            );



            $loop = new WP_Query($args);


            if ($loop->have_posts()):
              while ($loop->have_posts()):
                $loop->the_post(); ?>

            <div class="swiper-slide">
              <div class="card">


                <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>


                <h4>
                  <?php the_title(); ?>
                </h4>
                <?php the_content(); ?>
                <a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More →</a>

              </div>
            </div>
            <?php endwhile; else: endif; ?>



          </div>

        </div>
      </div> <!-- row end -->






      <!------------------- Fonts --------------------->





      <div class="resource-row-wrapper">


        <div class="swiper mySwiper">
          <div class="category-heading-wrapper">
            <h3>Fonts & Typography</h3>
            <div class="control-wrapper">
              <div class="swiper-button-prev"></div>
              <div class="counter-test"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <hr>

          <div class="swiper-wrapper">
            <?php
            $args = array(

              'post_type' => 'resources',
              'post_status' => 'publish',
              'category_name' => 'fonts-and-typography'

            );



            $second_loop = new WP_Query($args);


            if ($second_loop->have_posts()):
              while ($second_loop->have_posts()):
                $second_loop->the_post(); ?>

            <div class="swiper-slide">
              <div class="card">


                <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>


                <h4>
                  <?php the_title(); ?>
                </h4>
                <?php the_content(); ?>
                <a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More →</a>

              </div>
            </div>
            <?php endwhile; else: endif; ?>
          </div>

        </div>
      </div> <!-- row end -->

      <!------------------- Iconography --------------------->





      <div class="resource-row-wrapper">


        <div class="swiper mySwiper">
          <div class="category-heading-wrapper">
            <h3>
              <?php echo $test; ?>
            </h3>
            <div class="control-wrapper">
              <div class="swiper-button-prev"></div>
              <div class="counter-test"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <hr>

          <div class="swiper-wrapper">
            <?php
            $args = array(

              'post_type' => 'resources',
              'post_status' => 'publish',
              'category_name' => 'iconography'

            );



            $third_loop = new WP_Query($args);


            if ($third_loop->have_posts()):
              while ($third_loop->have_posts()):
                $third_loop->the_post(); ?>

            <div class="swiper-slide">
              <div class="card">


                <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>


                <h4>
                  <?php the_title(); ?>
                </h4>
                <?php the_content(); ?><!-- This grabs the link put in on the wordpress side -->



                    <a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More →</a>

                  </div>
                </div>
              <?php endwhile; else: endif; ?>
          </div><!-- swiper wrapper end -->

        </div><!-- swiper end -->
      </div> <!-- row end -->
    </div><!-- sliders wrapper end -->

  </div><!-- webdev-resources-wrapper end -->
</div><!-- body wrapper end -->









<?php get_footer(); ?>