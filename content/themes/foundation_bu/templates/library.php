<?php
/*
Template Name: Library Page
*/
?>
<?php get_header(); ?>

<!-- Main Page Content and Sidebar -->







  <div class="row top-small-margin">

    <div class="large-10 columns" role="content">


      <!-- Library Intro -->
      <div class="large-content-block">
        <div class="row panel top-radius">
          <div class="row">
            <div class="large-12 columns">
              <h2>Browse our Library</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, aliquid natus libero odit numquam eaque!</p>
            </div>
          </div>
          <div class="row">
            <div class="large-6 columns">
              <h3>Ready to start learning?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ea doloremque enim voluptates dolorum magni?</p>
              <a href="/pricing" class="button success radius">View pricing now</a>
            </div>
            <div class="large-6 columns">
              <h3>How to use this library</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ab, blanditiis maiores quam sint optio culpa ducimus.</p>
              <a href="#" class="button radius">
                Start the tour
              </a>
            </div>
          </div>
        </div>
        <div class="row light bottom-radius">
          <dl class="sub-nav">
            <dt></dt>
            <dd class="active"><a href="#">Newest</a></dd>
            <dd><a href="#">Oldest</a></dd>
            <dd><a href="#">Alphatbetical</a></dd>
            <dd><a href="#">Difficulty</a></dd>
          </dl>
        </div>
      </div>
      <!-- End Library Intro  -->


      <div class="library-content top-small-margin">
        <div class="row">
          <div class="large-12 columns">


          <ul class="small-block-grid-1 large-block-grid-2">

<?php
  $myposts = get_posts('');
  foreach($myposts as $post) :
    setup_postdata($post);
    $category =  get_the_category();
    $tags = get_the_tags();
?>


  <!-- <?php the_content(); ?> -->



            <li class="top-radius bottom-radius">
              <div class="content-block">
                <div class="row">
                  <div class="large-4 columns">
                    <h4><?php echo $category[0]->cat_name ?></h4>
                    <h6 class="subheading"><?php echo types_render_field('difficulty'); ?></h5>
                  </div>
                  <div class="large-8 columns">
                    <div class="flex-video widescreen">
                      <iframe src='//<?php echo types_render_field('video-url') ?>?showinfo=0&autohide=1' frameborder='0' allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <a href="<?php the_permalink() ?>"
                      <h3><?php the_title(); ?></h3>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <?php
                      if ($tags) {
                        foreach($tags as $tag) {
                          echo "<span class='label secondary round'>". $tag->name ."</span>";
                        }
                      }
                    ?>
                  </div>
                </div>
              </div>
            </li>

<?php endforeach; wp_reset_postdata(); ?>


          </ul>


          </div>

        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <ul class="pagination">
            <li class="arrow unavailable"><a href="">&laquo;</a></li>
            <li class="current"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="unavailable"><a href="">&hellip;</a></li>
            <li><a href="">12</a></li>
            <li><a href="">13</a></li>
            <li class="arrow"><a href="">&raquo;</a></li>
          </ul>
        </div>
      </div>

    </div>


    <!-- Sidebar -->

    <aside class="large-2 columns">
        <form>
         <div class="row collapse">
            <div class="small-9 columns">
              <input type="text" placeholder="search" />
            </div>
            <div class="small-3 columns">
              <span class="postfix"><i class="foundicon-search"></i></span>
            </div>
          </div>
        </form>

        <dl class="accordion" data-accordion>
        <dd>

          <a href="#panel1">by Topic</a>
          <div id="panel1" class="content active">
            <a href="#" class="">Production</a><br><br>
            <a href="#" class="">DJ</a><br><br>
            <a href="#" class="">Sound Design</a><br><br>
            <a href="#" class="">Music Theory</a><br><br>
            <a href="#" class="">Mixing</a><br><br>
            <a href="#" class="">Mastering</a><br><br>
            <a href="#" class="">Performance</a><br><br>
          </div>
        </dd>


        <dd>
          <a href="#panel2">by Software</a>
          <div id="panel2" class="content">
            <a href="#" class="">Ableton</a><br><br>
            <a href="#" class="">Logic</a><br><br>
            <a href="#" class="">Reason</a><br><br>
            <a href="#" class="">Massive</a><br><br>
            <a href="#" class="">Battery</a><br><br>
            <a href="#" class="">Traktor</a><br><br>
            <a href="#" class="">Serato</a><br><br>
            <a href="#" class="">Bitwig</a><br><br>
            <a href="#" class="">Pro Tools</a><br><br>
          </div>
        </dd>
        <dd>
          <a href="#panel3">by Content Type</a>
          <div id="panel3" class="content">
            <a href="#" class="">Tutorial</a><br><br>
            <a href="#" class="">Short Course</a><br><br>
            <a href="#" class="">Workshop</a><br><br>
            <a href="#" class="">Interview</a><br><br>
          </div>
        </dd>
      </dl>
    </aside>

    <!-- End Sidebar -->
  </div>



  <!-- End Main Content and Sidebar -->

<?php get_footer(); ?>