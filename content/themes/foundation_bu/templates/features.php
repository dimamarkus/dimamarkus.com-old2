<?php
/*
Template Name: Features Page
*/
?>
<?php get_header(); ?>

<div class="hero-row" id="features-hero">
  <div class="row">
    <div class="large-7 columns">
      <h1>How Dubspot works</h1>
      <h2 class="subheader">Dubspot can help you kick start your music career.</h3>
        <br><br>
        <a href="#feature-1" class="button success radius">
          Find out how <i class="foundicon-down-arrow iconfont"></i>
        </a>
      </div>
    </div>
</div>


	<div class="row top-row text-center" id="feature-1">
		<div class="large-10 large-centered columns">
			<h4 class="subheading">
				Lorem ipsum dolor sit amet, consectetur.
			</h4>
			<h2>Choose a musical path</h2>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, corporis, animi deserunt ipsum impedit dicta consequatur tenetur quae magnam excepturi iusto obcaecati commodi sequi est architecto. Laboriosam mollitia consequatur obcaecati suscipit impedit eum sit repellendus.</p>
		</div>
	</div>


<div class="dark">
	<div class="large-row">
		<div class="row nested-row">
			<div class="large-6 columns">
				<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt deleniti aut laborum non. Eos, ut!</p>
			</div>
			<div class="large-6 columns">
				<img src="http://placehold.it/400x200&text=image">
			</div>
		</div>
		<div class="row nested-row">
			<div class="large-6 columns">
				<img src="http://placehold.it/400x200&text=image">
			</div>
			<div class="large-6 columns">
				<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt deleniti aut laborum non. Eos, ut!</p>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt deleniti aut laborum non. Eos, ut!</p>
			</div>
			<div class="large-6 columns">
				<img src="http://placehold.it/400x200&text=image">
			</div>
		</div>
	</div>
</div>


<div class="light">
	<div class="row large-row">
		<h4>Moar info</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, possimus, quidem? Non, vel cum porro incidunt suscipit omnis dolorem ipsam dignissimos ad dolore ipsum laborum quisquam nihil culpa praesentium maxime distinctio quas quae commodi at earum enim rerum quam! Molestias, aperiam ratione est ipsum ipsa.</p>
	</div>
</div>


<?php get_footer(); ?>

<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>