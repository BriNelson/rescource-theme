<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="card">
	

<?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

<?php endif;?>
<h3><?php the_title(); ?></h3>
	<?php the_content();?>

	
	</div>
	<?php endwhile; else: endif;?>
<?php get_footer(); ?>