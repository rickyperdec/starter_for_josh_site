<!DOCTYPE html>
<html lang="en">
  <head>
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>
      
          <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
            ?>
      
      </title>  
       

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" >
    <link href="responsive.css" rel="stylesheet" >
<?php wp_head(); ?>
</head>
    
  <body>
      <header class="container-fluid herobg">
      
      <nav class="navbar">
          
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
      <a class="navbar-brand" href="#"> <span class="josh"> JOSH</span> <span class="whitkin">WHITKIN </span> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"> HOME </a></li>
        <li><a href="#"> PROJECTS </a></li>
        <li><a href="#"> PUBLICATIONS </a></li>
        <li><a hred="#"> CV </a></li>
        <li><a hred="#"> CONTACT </a></li>
      </ul>
    </div>
  </div>
</nav>
      
    <div class="hero-image">
       
  <div class="hero-text">
    <h1> Games Design for the Future</h1>
  </div>
</div>

      
</header>