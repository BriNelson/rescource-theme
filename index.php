<?php get_header(); ?>
<!------------------- Hero ------------------------->
<section class="hero">
	<div class="hero-wrapper">
		<div>
			<div class="landing-header-one">

				Industry learning beyond the classroom

			</div>
			<div class="hero-subheading">The Product Resource Hub gives you the tools and resources to expand your
				knowledge and help you network.</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/industry-learning-no-background.png" alt="">
	</div>
</section>
<!------------------- End of Hero ----------------------->

<div class="body-wrapper">
	<section class="home-section discover-new-resources">

		<h2>
			<div> Discover New Resouces</div>
		</h2>


		<div class="row-wrapper">
			<div class="uxdesign-card">
				<div class="landing-header-three">UX-Design</div>
				<hr>

				<ul class="fa-ul">
					<li><a href="/ux-featured"><i class="fa-solid fa-star fa-xl fa-fw"></i><span>Featured Resources</span></a></li>
					<li><a href="/ux-inspiration"><i class="fa-solid fa-lightbulb fa-xl fa-fw"></i>Design Inspiration</a></li>
					<li><a href="/ux-news"><i class="fa-solid fa-newspaper fa-xl fa-fw"></i>News Sources</a></li>
					<li><a href="/ux-extended-education"><i class="fa-solid fa-book-open-reader fa-xl fa-fw"></i>Extended Education</a></li>
					<li><a href="/networking"><i class="fa-solid fa-people-group fa-xl fa-fw"></i>Team Collaboration</a></li>
				</ul>
			</div>

			<div class="verticle-divider"></div>

			<div class="uxdesign-card">
				<div class="landing-header-three">Web Developement</div>
				<hr>

				<ul class="fa-ul">
					<li><a href="/featured"><i class="fa-solid fa-star fa-xl fa-fw"></i>Featured Resources</a></li>
					<li><a href="/webdev-coding-essentials"><i class="fa-solid fa-file-code fa-xl fa-fw"></i>Coding Essentials</a></li>
					<li><a href="/webdev-news"><i class="fa-solid fa-newspaper fa-xl fa-fw"></i>News Sources</a></li>
					<li><a href="/webdev-extended-education"><i class="fa-solid fa-book-open-reader fa-xl fa-fw"></i>Extended Education</a></li>
					<li><a href="/webdev-team-collaboration"><i class="fa-solid fa-people-group fa-xl fa-fw"></i>Team Collaboration</a></li>
				</ul>
			</div>
		</div>
	</section>


	<!--------------------- Prepare for your career section -------------------- -->
	<section class="home-section prepare-for-your-career">
		<div class="landing-header-two">
			<div>Prepare for your Career</div>
		</div>
		<div class="row-wrapper">
			<section class="sub-section">
				<div class="subsection-content">
					<h3 class="sub-section_title">Portfolio</h3>
					<p>
						Make your past work shine. Learn how to build up your portfolio to give empolyers a reason to
						hire you...
					</p>
					<button class="primary-button">Learn More</button>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio.png" alt="">
			</section>
		</div>

		<hr>

		<div class="row-wrapper">
			<section class="sub-section">
				<div class="subsection-content">
					<h3 class="sub-section_title">Networking</h3>
					<p>
						Connect to the industry. Get a head start on Networking. Get familiar with what industry leaders
						are saying...
					</p>
					<button class="primary-button">Learn More</button>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/networking.png" alt="">
			</section>
		</div>



	</section>
	<!--------------------- Program Offerings Section ----------------------->
	<section class="home-section program-offerings">
		<div class="row-wrapper">
			<div class="column-wrapper">

				<h2>What does your program have to offer?</h2>

				<button class="primary-button">Learn More</button>
			</div>

			<div class="column-wrapper">
				<div class="small-row"> <img src="<?php echo get_template_directory_uri(); ?>/images/stars.svg" alt="">
					<p><span>The ADMS </span>Includes a device wall, work stations, and great music.</p>
				</div>
				<div class="small-row"><img src="<?php echo get_template_directory_uri(); ?>/images/stars.svg" alt="">
					<p><span>The UX Lab. </span>Whiteboard tables, smarthome devices, and collaborative work
						environment.</p>
				</div>
				<div class="small-row"><img src="<?php echo get_template_directory_uri(); ?>/images/stars.svg" alt="">
					<p><span>UXpeditions. </span> Make networking connections across the globe and travel with
						classmates.</p>
				</div>
			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>