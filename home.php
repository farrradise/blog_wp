<?php get_header(); ?>
<body>

<header>

  <nav id="menu" class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars navbar-toggle-icon" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <div class="navbar-nav mr-auto mt-2 mt-lg-0">
        <a href="<?php bloginfo('url'); ?>">
          <?php bloginfo('name'); ?>
        </a>
        <?php wp_nav_menu(); ?>
      </div>
    </div>
    <?php get_template_part('social');?>
  </nav>



  <div class="titrage">

    <h1>
      <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
    <h2><?php bloginfo('description'); ?></h2>


    <img class="bgpourxs" src="<?php bloginfo('stylesheet_directory');?>/img/bg-xs.jpg" alt="img de fond femme qui mime des jumelles avec ses mains"/>

  </div>

</header>

<?php get_footer(); ?>
