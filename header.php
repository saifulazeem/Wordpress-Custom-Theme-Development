<?php



/*


This file will be used to Display header of webiste its a part of template file.




*/


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    
</head>



<body>

    <div class="container-fluid" id="header">
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                 </li>
                <li class="nav-item">
                     <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                </li>
             </ul>
        </div>
        <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input  class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </nav>
    </nav>

    </div>
<br>
