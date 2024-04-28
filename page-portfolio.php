<?php
/*
Template Name: portfolio
*/
?>

<?php get_header(); ?>
<!--------------------- Body ------------------------->
<div class="body-wrapper">
    <hgroup class="page-heading-group uvu-resource-page">
        <h1>Portfolio</h1>
        <p>Learn how to piece together a portfolio that will wow potential
            employers or clients and demonstrate your skills, experience,
            and problem-solving abilities.</p>
    </hgroup>
    <section class="product-team-section uvu-resource-page">
        <h2>Making Your Work Shine</h2>
        <p>While there are tried and true ways to develop your portfolio 
            and to structure your case studies, one thing needs to be at 
            the top of your mind when making your portfolio... “How can I 
            make my work shine? How can I stand out?” Explore these approaches 
            and ideas to get your mind stirring about how you can create an 
            eye-catching portfolio.</p>
        <div class="row-wrapper">
            <ol>
                <li>
                    <h3>Show your WHY:</h3>
                    <ul>
                        <li>Introduce the project, your role, and objectives concisely.</li>
                        <li>Clearly state the problem or challenge and its significance.</li>
                    </ul>
                </li>
                <li>
                    <h3>Show the challenges you encountered:</h3>
                    <ul>
                        <li>Describe research methods used and key insights gained.</li>
                        <li>Introduce user personas based on research findings.</li>
                    </ul>
                </li>
                <li>
                    <h3>Show your problem-solving abilities:</h3>
                    <ul>
                        <li>Showcase ideation, wireframes, and prototypes.</li>
                        <li>Discuss iterative design based on feedback and testing.</li>
                    </ul>
                </li>
                <li>
                    <h3>Show your passion:</h3>
                    <ul>
                        <li>Present final UI designs and interaction elements.</li>
                        <li>Explain design decisions and their impact on user experience.</li>
                    </ul>
                </li>
                <li>
                    <h3>Show real world experiences:</h3>
                    <ul>
                        <li>Share project outcomes and measurable impact.</li>
                        <li>Conclude with reflections on challenges, learnings, and a call to action.</li>
                    </ul>
                </li>
            </ol>
            <div class="ideas-card">
                <h3>Ideas</h3>
                <hr>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-lightbulb"></i></span> Only show your finished designs on your
                        site and encourage employers to ask you
                        about the project. Have a
                        story/presentation prepared to go over said project.:</li>

                    <li><span class="fa-li"><i class="fa-solid fa-lightbulb"></i></span>Create a video or video segments that go over your project.
                        Find a way to also make it skimmable</li>

                    <li><span class="fa-li"><i class="fa-solid fa-lightbulb"></i></span>Include 3D graphics, animations, and other visual embellishments</li>
                    <li><span class="fa-li"><i class="fa-solid fa-lightbulb"></i></span>Include your hobbies into your site design</li>

                </ul>

            </div>
        </div>

        <p>AVOID creating a cookie cutter portfolio. Keep it
            structured and organized, but you don’t have to follow the same layout as every other portfolio.</p>
<br>
        <p>Remember, your portfolio isn’t the only tool to help you land a job.
            Networking also plays a huge role in furthering your career. Learn more about networking.</p>
        <button class="primary-button">Networking Guide</button>
    </section>

<div class="resource-sliders-wrapper">
    <!--------------------- Example Portfolio slider  ---------------------->
    <div class="resource-row-wrapper">


        <div class="swiper mySwiper">
          <div class="category-heading-wrapper">
            <h3>Example Portfolios</h3>
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


    <!--------------------- website builder slider  ----------------------  -->
    <div class="resource-row-wrapper">


        <div class="swiper mySwiper">
          <div class="category-heading-wrapper">
            <h3>Website Builders</h3>
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

    

<!--------------------- portfolio articles slider  ----------------------  -->
<div class="resource-row-wrapper">


        <div class="swiper mySwiper">
          <div class="category-heading-wrapper">
            <h3>Articles</h3>
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

    </div>


</div>







<?php get_footer(); ?>