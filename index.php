<?php
  get_header();

  ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Welcome to our Exciting Blog </h1>
      <div class="page-banner__intro">
        <p> Keep up with our latest news!</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  <?php
    while(have_posts()){
      // get data
      the_post();  ?>

      <!-- // display the posts -->

      <div class="post_item">

      <h2 class="headline headline--medium headline--post-title"><a href="<?php  the_permalink() ?>"> <?php the_title();  ?> </a> </h2> 
      <div class="metabox"> 
      <p> Posted by <?php the_author_posts_link() ?> on <?php the_time()  ?> in News </p>  </div>
      <div class="generic-content"> <?php the_excerpt(); ?> </div> 
      <p> <a class="btn btn--blue" href="<?php the_permalink(); ?> "> Continue reading &raquo; </a> </p>  

    <?php }
  ?>

  </div>
  <?php get_footer();



?>