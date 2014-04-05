<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

    <div class="hero-row" id="home-hero">
      <div class="row">
        <div class="large-7 columns">
          <h1>Start making music you love.</h1>
          <h2 class="subheader">Learn how to produce, perform and everything in between.</h3>
            <a href="/pricing?free_trial=true" class="button success radius">
              Free Trial
            </a>
            <a href="/features" class="button secondary radius">
              Learn More
            </a>
          </div>
        </div>
      </div>



      <div class="row top-row">
        <div class="large-6 columns">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/daw.jpg" alt="">
        </div>
        <div class="large-6 columns">
          <h3>Comprehensive content</h3>
          <p>Learn from our giant collection of over 400 tutorials. All of our materials were created by instructors in the top of their field and professionally recorded and edited by our expert video team. With new videos being added every day, you can be sure that you'll find what you're looking for.</p>
          <a href="/library">Browse our courses</a>
        </div>
      </div>


      <div class="row bottom-row">
        <div class="large-6 columns">
          <h3>Learn at your own pace</h3>
          <p>Start your education from whatever point you feel comfortable. Expert and beginner tutorials are all instantly accessible and always available for reference. Need some guidance? We got you covered with our specially designed curriculum paths to get you to your goals.</p>
          <a href="/programs">Check out our curriculums</a>
        </div>
        <div class="large-6 columns">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-studio.jpg" alt="">
        </div>
      </div>


      <div class="row nested-row text-center">
        <div class="large-12 columns">
          <h2>Fulfill your dreams</h2>
          <h4 class="subheader">At Dubspot you will learn what you need to make the music you love.</h4>
          <br><br><br>
          <a href="/pricing?free_trial=true" class="button success radius">
            Begin your free trial now
          </a>
        </div>
      </div>

      <br><br>





<?php get_footer(); ?>