




# Resource Theme
This is a custom Wordpress custom theme for a potential UVU resource website

<br>

## Prerequisites for this project 
- The ability to save in resources(database)
- Some sort of login
- It has to run on bluehost shared hosting
- Cant incur any ongoing cost (database cost, hosting cost, and such)

<br>

## Solution chosen and why
Because I was locked into shared bluhost hosting, running any kind of server side node related stuff will not work(as far as I can tell). This means no React/nextjs no node packages and a continuos api server would not work. Not incurring any ongoing cost not only caused me to be unable to change the hosting situation, it also made it difficult to find a database that would work with the prerequisites. 


### Potential options
- Learn vanilla PHP and Mysql
  - lots of learning involved/ not many great resources 
- PHP framework "Laravel" and Mysql
  - tempting, better resources even for a login/auth - still a lot of learning time
- Wordpress custom theme
  - good resources, less learning, Wordpress is kind of a pain

### Chosen Solution: Wordpress

Wordpress ended up being chosen as it seemed like the least time consuming option. I had some experience in wordpress and I thought maybe I could make it would work. 

<br>

## Important functions



### Custom WordPress post
The word press custom post works similar to blog post except you can change it to fit any of your needs. The snippet below (found in functions.php) adds a custom post. You can control the name of post and it's different properties through this funciton. You can also reuse it if you want to add a new custom post you just have to change the function name and change the names in the "labels" array.

```
function my_first_post_type()
{
	add_theme_support('post-thumbnails');
	$args = array(


		'labels' => array(
      <!-- Names the custom post -->
			'name' => 'Resources',
			'singular_name' => 'Resource',
		),
    <!-- controls the different properties of the loop -->
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category'),
		//'rewrite' => array('slug' => 'resources'),	

	);


	register_post_type('Resources', $args);


}
add_action('init', 'my_first_post_type');
```

### Wordpress Loop
This word press loop allows you to show all the post in a select category or categories. If you want to show more resources you can reuse this loop in other places and change the category or add categories to existing loops.

```
 $args = array(

                'post_type' => 'resources',  <!-- custom post name -->
                'post_status' => 'publish',
                'category_name' => 'news-sources-web-development', <!-- category(s) that the loop loops through -->
                'posts_per_page' => -1  <!-- amount of post shown (negative -1 means no limit) -->

            );



            $loop = new WP_Query($args);


            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post(); ?>


            


                <?php if (has_post_thumbnail()): ?><!-- pulls the featured image if its there -->
                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>


                <h4>
                
                    <?php the_title(); ?><!-- Pulls the title of the custom post -->
                </h4>
                <?php the_content(); ?><!-- Pulls the content -->
                <a href="<?php echo get_post_meta(get_the_ID(), 'Resource Link', true); ?>">Learn More
                    →</a>

            

            <?php endwhile; else: endif; ?><!-- end of WordPress loop  -->
```

### Wordpress Navigation
The navigation is run through wordpress as well. They are initialized in the functions.php file then added into each page

#### Initialize navigations in functions.php
```
add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'resource-menu' => 'Resource Menu Location',
		'webdev-resource-menu' => 'Webdev Resource Menu Location',
	)
);
```
#### The navigation function found in each page
```
<?php
        wp_nav_menu(

          array(

            'theme_location' => 'resource-menu',
            'menu_class' => 'resource-menu',
          )


        );
        ?>
```
## Slideshow and [Swiper.js](https://swiperjs.com/)
The slideshows and carousels are all run by [Swiper.js](https://swiperjs.com/) a popular javascript slider. There are currently two different versions 'swipers' running on the site and you can add more by initializing more. The sliders are initialized at the bottom of footer.php
```
var swiper = new Swiper(".mySwiper", {
	navigation: {
		
		hideOnClick: true,
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	slidesPerView: 4,
      spaceBetween: 17,
	  observer: true,
            observeParents: true
    
  });


  var swiper2 = new Swiper(".mySwiper2", {
	pagination: {
        el: ".swiper-pagination",
      },
	});
    
```
<br>

## Work that needs to be done still (As of April 2024)
- Networking Slide Show
- Vetting and adding more and better resources
- Missing social media links on dev leaders
- Link on large slideshow not yet done
- Large slideshow slides in how they show up and what categories they come from 
- Mobile work 
- The lines are missing or incorrect on the front page
- Buttons have no links right now

- CSS could use some refactoring and simplifying
  - Padding and margins are in px in most cases instead of rem
  - The is some repetitive stuff
  - Some of the earlier H1 heading type things are not done correctly at all
  - The image on the hero has something wrong with it
  - The nav width needs to be limited, the nav layout could be worked out better overall
  - Margin between footer and bottom of content not correct across all pages
  - There is some bad namings the css
  - CSS file could be broken up and used with sass to make it not so long.
  - Minify css
  - svg stars on front page need help
- Top Nav selection doesn't stay on "UX" or "webdev" when moving through pages on sub menu (probably needs to be fixed with JS)
- Some form of Lazy loading would be nice
- Manual install of WordPress on the part of bluehost Dr Cheneys bluehost that was provided for us(probably need to work with him)

<br>

  ## Getting Started With The Devlopment

  1. Get a local install of WordPress [how to](https://www.youtube.com/watch?v=n3EcEYFgyrQ&list=PLgFB6lmeXFOpHnNmQ4fdIYA5X_9XhjJ9)
  2. Import Migration file to your local install [how to](https://www.youtube.com/watch?v=0_HeL-fKXho&t=307s)
  3. Once file is migrated open the theme location file with your editor  
  
  You Should be able to work on the theme and do anything with it. You can also clone the theme from here but it will not keep any of the resource data/photos

<br>

## Helpful Links

Project Figma (iteration 3) https://www.figma.com/file/SZfkb5URSxmcoGCAmpVZHA/Product-Resource-Hub-Website?type=design&node-id=0-1&mode=design&t=d9TnZw3QXLs4OnKW-0

Swiper js used for carousels https://swiperjs.com/

<br>

### Hosting and test server
My test server https://oak.tak.mybluehost.me/  WordPress admin https://oak.tak.mybluehost.me/admin

The subdomain we were given by Paul Cheney(nothing on it yet ) https://hub.dgmuvu.com/

<br>

### How to wordpress development stuff
How to setup a local Wordpress install(Easiest way to work on the project it in my opinion)https://www.youtube.com/watch?v=n3EcEYFgyrQ&list=PLgFB6lmeXFOpHnNmQ4fdIYA5X_9XhjJ9d

How to manually install WordPress:(fast version) https://www.youtube.com/watch?v=0gjLVvr9pc8&t=2s (more in-depth)https://www.udemy.com/course/custom-theme-creation-for-wordpress/learn/lecture/12372274#overview

How to migrate wordpress install: https://www.youtube.com/watch?v=0_HeL-fKXho&t=307s

Basic custom WordPress theme (this is the one I mostly used) https://www.youtube.com/watch?v=n3EcEYFgyrQ&list=PLgFB6lmeXFOpHnNmQ4fdIYA5X_9XhjJ9d
  
  
How to customize and make a custom wordpress loop: https://www.youtube.com/watch?v=-XOBJm2SObQ&list=WL&index=13&t=593s

In-depth custom WordPress theme https://www.youtube.com/watch?v=-h7gOJbIpmo&t=5615s

<br>

### How to use the wordpress back end to manage the site

How to add a resource in and give it categories https://youtu.be/FtVwv78LjgQ
