<?php



/*


This file will be used to Display search results.




*/

get_header();


?>

<div class="container">
       <br>
       <?php  get_search_form() ?>
       <br>
       <br>
       <h1 style="color: #4d4d4d;text-align:left;">Search Results: </h1>
</div>

          <?php 
          if ( have_posts() ) : ?>
            <?php  while ( have_posts() ) : the_post(); ?>
                
               <div class="container">
                <h2 style="color: #4d4d4d;text-align:left;"> <?php the_title();  ?></h2>
                
                </div>
        <p> <?php the_content(); ?> </p>
        <br>
   <?php endwhile;  ?>
<?php
endif; 
?>



<?php

get_footer();
?>