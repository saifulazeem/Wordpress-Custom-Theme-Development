<?php



/*


This file will be used to Deal with categories, dates, links or Tag when they are browsed.




*/

get_header();


?>



<?php 
if ( have_posts() ) : ?>
  <?php  while ( have_posts() ) : the_post(); ?>
        <h1> <?php the_title();  ?></h1>
        <p> <?php the_content(); ?> </p>
   <?php endwhile;  ?>
<?php
endif; 
?>



<?php

get_footer();
?>