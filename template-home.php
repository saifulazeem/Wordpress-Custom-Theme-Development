<?php

// Template Name: Home Template

get_header();
?>


<!-- <div class="cust-header">
<img src="">

</div> -->
<div id="overall-body" class="container-fluid" style="background-image: url(<?php echo get_custom_header()->url ?>); background-repeat: no-repeat; ">
<br>
<br>
<div class="container" >
<?php get_search_form() ?>
</div>
<br>
<br>
<br>

<div class="container" id="home-page"   >

<br>
    <div class="row">
        <div class="col">
        
    <?php 
    include("template-category.php");
    ?>
        <!-- <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th COLSPAN="9" style="text-align: center;"><h1>Browse Extensions Alphabetically</h1></th>

                  </tr>
                </thead>
                <tbody style="text-align: center;">
                  <tr>
                    <td>#</td>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>E</td>
                    <td>F</td>
                    <td>G</td>
                    <td>H</td>

                  </tr>
                  <tr>
                    <td>I</td>
                    <td>J</td>
                    <td>K</td>
                    <td>L</td>
                    <td>M</td>
                    <td>N</td>
                    <td>O</td>
                    <td>P</td>
                    <td>Q</td>

                  </tr>
                  <tr>
                    <td>R</td>
                    <td>S</td>
                    <td>T</td>
                    <td>U</td>
                    <td>V</td>
                    <td>W</td>
                    <td>X</td>
                    <td>Y</td>
                    <td>Z</td>

                  </tr>
                   <tr>
                    <th scope="row">Programs Information</th>
                    <td>ABCD Programs</td>
                    <td>AB</td>
                  </tr> 
                </tbody>
              </table> -->
        </div>

    </div>
</div>
<br>
<br>
<br>
<br>
<br>
</div>

<?php
get_footer();
?>