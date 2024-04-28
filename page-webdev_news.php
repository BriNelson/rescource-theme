<?php
/*
Template Name: Webdev News
*/
?>

<?php get_header(); ?>

<?php 
$args = array ( 

    'post_type' => 'resources',
    'post_status' => 'publish',
	'category_name' => 'news-sources-web-development',
	
);

$loop = new WP_Query($args);


if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();?>

<div class="card">
	

<?php if(has_post_thumbnail()):?>
<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
<?php endif;?>


<h3><?php the_title(); ?></h3>
	<?php the_content();?>

	
	</div>
	<?php endwhile; else: endif;?>



<?php get_footer(); ?>