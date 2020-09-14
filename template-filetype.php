<?php


// Template Name: Filetypes Template

get_header();

?>



<div class="container">


<br>
<br>

<div class="row">


<div class="col-8">

<?php 
if ( have_posts() ) : ?>
  <?php  while ( have_posts() ) : the_post(); ?>
        <h1 style="color: #4d4d4d;text-align:left;"> <?php the_title();  ?></h1>
        <p> <?php the_content(); ?> </p>
   <?php endwhile;  ?>
<?php
endif; 
?>
<table class="table table-striped  table-hover table-condensed">
              <thead style=" background: #00346E 0% 0% no-repeat padding-box; opacity: 1; color: #fff;text-align:center;">
                <tr>
                  <th COLSPAN="2" style="border-radius: 10px 10px 0px 0px;"><h2>Extension Name</h2></th>
                  <!-- <th style="border-radius: 10px 10px 0px 0px;"><h2>Extension Type</h2></th>
                   -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>Bt File Extension</td>
                  <td>ABCD Programs</td>
                </tr>
                <tr>
                  
                  <td>Btf File Extension</td>
                  <td>ABCD Programs</td>
                </tr>
                <tr>
            
                  <td>xyz File Extension</td>
                  <td>ABCD Programs</td>
                </tr>
                <tr>
                  <td>4 File Extension</td>
                  <td>ABCD Programs</td>
                </tr>
              </tbody>
            </table>




</div>
<div class="col-4">
<?php get_sidebar() ?>
</div>

</div>

</div>



<?php

get_footer();

?>