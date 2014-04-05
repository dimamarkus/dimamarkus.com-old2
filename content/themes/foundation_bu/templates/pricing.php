<?php
/*
Template Name: Pricing Page
*/
?>
<?php get_header(); ?>


<div class="dark hero-row" id="pricing-tables">

		<div class="row">
			<div class="large-6 columns">
				<h4 class="subheading">Make music today.</h4>
				<h1>                   Sign up to Dubspot</h1>
			</div>
		</div>

		<div class="row">
			<div class="large-6 columns">
				<ul class="pricing-table">
					<li class="title">      Standard</li>
					<li class="price">      $9.99 a month</li>
					<li class="bullet-item">Over 400 Tutorials (and counting)</li>
					<li class="bullet-item">Dozens of Short Courses</li>
					<li class="bullet-item">Project Files and Samples</li>
					<li class="cta-button">
						<a class="button radius" href="shop/?add-to-cart=49">Buy Now</a>
					</li>
				</ul>
			</div>

			<div class="large-6 columns">
				<ul class="pricing-table">
					<li class="title premium">Premium</li>
					<li class="price">        $24.99 a month</li>
					<li class="bullet-item">  Access to all the Standard features</li>
					<li class="bullet-item">  Artist Interviews and Workshops</li>
					<li class="bullet-item">  Live Chat / Feedback Sessions</li>
					<li class="cta-button">
				<?php
					if(isset($_GET["free_trial"]) && trim($_GET["free_trial"]) == true ){
						echo '<a href="pricing/shop/?add-to-cart=59" class="button success radius">Free Trial</a>';
					}

				 ?>

						<a class="button radius" href="pricing/shop/?add-to-cart=60">        Buy Now</a>
					</li>
				</ul>
			</div>
		</div>
</div><!-- end .hero-row -->


<div class="row top-row">
	<div class="text-center">
		<h2>Frequently Asked Questions</h2>
	</div>
</div>
<div class="row">
	<div class="panel">
		<h4>How does the free trial work?</h4>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, consequuntur, quaerat, alias hic pariatur rem mollitia sunt temporibus autem perferendis nobis maiores reprehenderit ab ad officia maxime ratione earum adipisci.
		</p>
	</div>
	<div class="panel">
		<h4>Can I cancel anytime?</h4>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, consequuntur, quaerat, alias hic pariatur rem mollitia sunt temporibus autem perferendis nobis maiores reprehenderit ab ad officia maxime ratione earum adipisci.
		</p>
	</div>
	<div class="panel">
		<h4>What do I need to get started?</h4>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, consequuntur, quaerat, alias hic pariatur rem mollitia sunt temporibus autem perferendis nobis maiores reprehenderit ab ad officia maxime ratione earum adipisci.
		</p>
	</div>
	<div class="panel">
		<h4>Will I need any special software or hardware?</h4>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, consequuntur, quaerat, alias hic pariatur rem mollitia sunt temporibus autem perferendis nobis maiores reprehenderit ab ad officia maxime ratione earum adipisci.
		</p>
	</div>

	<div class="text-center">
		<a href="#pricing-tables" class="button success radius cta">Start learning</a>
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