<?php
/*
Template Name: Networking
*/
?>

<?php get_header(); ?>
<div class="body-wrapper">
    <hgroup class="page-heading-group uvu-resource-page">
        <h1>Networking</h1>
        <p>The term “networking” seems so abstract, so daunting, so impossible as a college student,
            let’s break it down and make it an attainable and even enjoyable venture. Welcome to your
            networking guide. </p>
        <div class="network-slider">

        </div>
    </hgroup>

    <section class="uvu-resource-page getting-started-section">
        <h2>Getting Started</h2>
        <h3>Tip One - Join Groups & Attend Events</h3>
        <p>Networking is about being in the same room as like-minded individuals.
            You can begin by joining a community on LinkedIn or by browsing events on Meetup.
            So, get to it, engage in a conversation on LinkedIn, show up to an event that interests you,
            and shake some hands! </p>
    </section>

    <section class="comunities-section">
        <!--------------------- communities slider  ----------------------  -->
        <div class="resource-sliders-wrapper">
            <!--------------------- Example Portfolio slider  ---------------------->
            <div class="resource-row-wrapper">


                <div class="swiper mySwiper">
                    <div class="category-heading-wrapper">
                        <h3>UX & Dev Communites</h3>
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


    <section class="discover-mentors">
        <h3>Tip Two - Discover Mentors & Reach Out</h3>
        <p>Mentorship can also feel like an abstract concept,
            so how do you go about making these kinds of connections? Here’s some advice:
        </p>
        <ol>
            <li>
                <h4>Introduce yourself.</h4> It’s best to go to one of these industry leaders with an introduction of
                who you
                are, how you found them,
            </li>
            <li>
                <h4>Ask a specific question.</h4> For example, you might ask for feedback on a feature or page you’ve
                created.
            </li>
            <li>
                <h4>Follow up.</h4> If they respond with advice or some kind of action item, then act on it! You’ll want
                to apply
                their advice and then follow up by showing them your new design or by telling them the impact their
                advice had.
            </li>
        </ol>
        <p>It’s a simple process really! When you have a mentor
            you feel integrated into your field, you expand your
            network, and you have someone in the industry that’s had
            exposure to your work who has potential for hiring you
            or recommending you to someone in their network.
        </p>
        <br>
        <p>If you’re feeling uncomfortable with reaching out directly
            to people you don’t know well, then start contributing
            to group conversations on LinkedIn or on any of the
            groups you join.
        </p>
    </section>
    <section>
        <!--------------------- Local Dev Leaders slider  ----------------------  -->
        <div class="resource-sliders-wrapper">
            
            <div class="resource-row-wrapper">


                <div class="swiper mySwiper">
                    <div class="category-heading-wrapper">
                        <h3>Local Dev Leaders</h3>
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
        <h3>Local Design Leaders</h3>
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