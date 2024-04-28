

 

<?php wp_footer(); ?>

<footer>
  <hr>
  <div class="footer-content">2024 © Copyright | All Rights Reserved | UVU Digital Media Department | Admin</div>
</footer>



<!-- Initialize Swiper -->
<script>
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
  </script>
</body>
</html>