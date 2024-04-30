



<<<<<<< HEAD

=======
>>>>>>> ddcce3e756c670581b03ef38c5725c0aa06ae92d
# Resource Theme
for UVU product resource hub

This is a custom Wordpress custom theme for a potential UVU resource website

## Prerequisites for this project 
The ability to save in resources(database)
Some sort of login
It has to run on bluehost shared hosting
Cant incur any ongoing cost (database cost, hosting cost, and such)


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

Wordpress ended up being chosen as it seemed like the least time consuming option. I had some experience in wordpress and I thought maybe I could make it would work 

## Important functions



### Custom word press post
```
function my_first_post_type()
{
	add_theme_support('post-thumbnails');
	$args = array(


		'labels' => array(

			'name' => 'Resources',
			'singular_name' => 'Resource',
		),
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
  - Could broken up and used with sass to make it not so long.
  - Minify css
- Top Nav selection doesn't stay on "UX" or "webdev" when moving through pages on sub menu (probably needs to be fixed with JS)


  


  ## help links

  

