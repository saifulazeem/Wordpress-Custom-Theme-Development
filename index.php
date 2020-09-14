<?php

  get_header(); 

?>
<br>
<br>
<br>
<br>
<?php //get_template_part('template-parts/home','products') ?>



<div class="container">

  <div class="row">
    <div class="col-8">
    <?php 
    if ( have_posts() ) : ?>
      <?php  while ( have_posts() ) : the_post(); ?>
            <h1> <?php the_title();  ?></h1>
            <p> <?php the_content(); ?> </p>
       <?php endwhile;  ?>
    <?php
    endif; 
    ?>
    </div>
    <div class="col-4">
       <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
 <?php

get_footer();
?>