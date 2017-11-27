
  <nav id="menu" class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars navbar-toggle-icon" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <div class="menu-principal navbar-nav mr-auto mt-2 mt-lg-0">
        <a  class="title_navigation" href="<?php bloginfo('url'); ?>">
          <?php bloginfo('name'); ?>
        </a>
        <?php wp_nav_menu(); ?>
      </div>
    </div>
    <?php get_template_part('social');?>
  </nav>
