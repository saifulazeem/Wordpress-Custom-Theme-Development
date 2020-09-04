<?php



/*


This file will be used to Display header of webiste its a part of template file.




*/


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href= //bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href=" //bloginfo('stylesheet_url'); ?>"> -->
    <?php wp_head(); ?>
</head>



<body>

    <div class="container-fluid" id="header">
        <header class="container">
            <div class="row" ><?php the_custom_logo(); ?></div>
        

        <br>
        <br>
        
    
            <!-- <nav class="nav nav-pills nav-fill " #id="mynav"> -->
                <!-- <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="#">FileTypes</a></li>
                <li class="nav-item"><a class="nav-link " href="#">Help</a></li> -->
            <div class="row" >
                <!-- <div class="col-1"></div> -->
                <div class="col-12">
                <?php wp_nav_menu(
                    array(
                            'theme_location'=>'primary',
                            'menu_class'     => 'mymenu'

                    )
                   );
                    // wp_nav_menu( array(
                    //     'menu'              => 'primary',
                    //     'theme_location'    => 'primary',
                    //     'depth'             => 2,
                    //     'container'         => 'false',
                    //     'menu_class'        => 'nav nav-list',
                    //     'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
                    //     'walker'			=> new wp_bootstrap_navlist_walker())
                    // );

                    ?>
            
            <!-- </nav> -->
                </div>
                <!-- <div class="col-1"></div>         -->
             </div>
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
