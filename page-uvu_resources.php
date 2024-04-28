<?php
/*
Template Name: Uvu Resources
*/
?>

<?php get_header(); ?>



<div class="body-wrapper">
    <hgroup class="page-heading-group uvu-resource-page">
        <h1>UVU Resources</h1>
        <p>Discover the resources available to you here at UVU! The school provides different classrooms
            for you to work on projects and also the ability to travel & learn with the product team at UVU.</p>
    </hgroup>
    <section class="study-places-section uvu-resource-page">
        <h2>Places To Study & Work On Projects</h2>
        <p>Using the labs that UVU has provided, can help you with many things. You can work on projects,
            homework, and have the chance to make new friends in the Dev & Design Programs.</p>

        <div class="row-wrapper">
            <div class="study-places-card">
                <h3>ADMS Lab - CS 513</h3>
                <hr>
                <p>The Advanced Digital Media Sandbox located in CS 513 is available for Digital Media
                    students Sophomore level and above to work on projects. Digital Media students can
                    check out video games, gaming consoles, audio, and video materials for research
                    purposes in the Main Office of CS 526. (Includes a device wall, work stations, and great music.)</p>
            </div>

            <div class="study-places-card">
                <h3>UX Design Lab - CS 406</h3>
                <hr>
                <p>The UX Design Lab is located in CS 406 is available for Digital Media students Sophomore
                     level and above to work on projects. There are whiteboard tables, smart-home devices, 
                     and a collaborative work environment.
                </p>
            </div>
        </div>
        <!-- end of row -->

    </section>

    <section class="product-team-section uvu-resource-page">
        <h2>Join The Product Team at UVU!</h2>
        <p>Make networking connections, attend special speaker series events,
            go to lunch and learn, and join project expeditions across the globe!
            Discover opportunities to travel with classmates and boost your skills.</p>
        <div class="row-wrapper">
            <ol>
                <li>
                    <h3>UXpeditions & Devsplore:</h3>
                    <ul>
                        <li>Discover opportunities to travel with classmates.</li>
                        <li>Gain experiences that will boost your Portfolio.</li>
                    </ul>
                </li>
                <li>
                    <h3>Attend Special Speaker Series Events:</h3>
                    <ul>
                        <li>Learn from people in the industry.</li>
                        <li>Make connections early & find new friends.</li>
                    </ul>
                </li>
                <li>
                    <h3>Hear About Jobs & Internships:</h3>
                    <ul>
                        <li>Gain insider access to new internship & job possibilities.</li>
                    </ul>
                </li>
                <li>
                    <h3>Go To Lunch & Learns:</h3>
                    <ul>
                        <li>Network & have lunch with friends, professors, and professionals.</li>
                    </ul>
                </li>
                <li>
                    <h3>Participate In Sprint Projects:</h3>
                    <ul>
                        <li>Brush up your experience with the occasional sprint projects.</li>
                    </ul>
                </li>
            </ol>
            <img src="<?php echo get_template_directory_uri(); ?>/images/uvu_product_team.png" alt="">
        </div>

        <p>Click the link below to learn more and join the product resource hub!</p>
        
        <button class="primary-button">Learn More</button>
        
    </section>

    <section class="professor-reccomendations-section uvu-resource-page">
        <h2>Professor Reccomendations</h2>

        <!-- dev professors picks slider -->
        <div class="resource-sliders-wrapper">
            <!--------------------- Example Portfolio slider  ---------------------->
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
                                        <a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More
                                            →</a>

                                    </div>
                                </div>
                            <?php endwhile; else: endif; ?>



                    </div>

                </div>
            </div> <!-- row end -->


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
                        <a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More
                            →</a>

                    </div>
                </div>
            <?php endwhile; else: endif; ?>



    </div>

</div>
</div> <!-- row end -->
        </div>






    </section>

</div>

<?php get_footer(); ?>