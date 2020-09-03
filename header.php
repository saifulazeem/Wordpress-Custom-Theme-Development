<?php



/*


This file will be used to Display header of webiste its a part of template file.




*/


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php echo get_the_title(); ?>|
        <?php bloginfo('name');  ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href= //bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href=" //bloginfo('stylesheet_url'); ?>"> -->
    <?php wp_head(); ?>
</head>



<body>

    <div class="container-fluid" id="header">
        <header class="site-header">
            <div style="width: 100px; height:100px;"><?php the_custom_logo(); ?></div>
        

        <br>
        <br>
    
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="#">FileTypes</a></li>
                <li class="nav-item"><a class="nav-link " href="#">Help</a></li>
            
            </ul>
            <br>
            <br>
            <form class="row " >
        <div class="col-2"></div>
        <input  type="email" class="col-6 form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search Files here...">
        <div class="col-1"></div>
        <button class="col-1 btn btn-primary">Search</button>
        </form>
        <br>
        
    </header>
    </div>
<br>
