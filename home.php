<?php get_header(); ?>
<body>
  <header class="header-homepage">
    <?php get_template_part('entete');?>
    <div class="titrage">

      <h1>
        <a class="navbar-brand" href="#">
          <?php bloginfo('name'); ?>
        </a>
      </h1>

      <h2 class="slogan"><?php bloginfo('description'); ?></h2>

      <figure>
        <img class="bgpourxs" src="<?php bloginfo('stylesheet_directory');?>/img/bg-xs.jpg" alt="img de fond femme qui mime des jumelles avec ses mains"/>
      </figure>
    </div>

  </header>



  <?php
  $args = array( 'post_type' => 'post', // je veux uniquement les articles
  'showposts' => 3
  );
  $slides = new WP_Query( $args);
  ?>

  <div id="content-homepage">
    <?php if($slides->have_posts()) : ?>
        <?php while ($slides->have_posts()) : $slides->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="">

          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <figure>
              <?php the_post_thumbnail(''); ?>
              <figcaption>
                <h3><?php the_title(); ?>  </h3>
                <div class="postmetadata">
                  Par <?php the_author() ?> le <?php the_time('d/m/Y') ?>
                  <p>
                      <?php the_category(' | ') ?>
                  </p>
                </div>
              </figcaption>
            </figure>
          </a>

        </article>
      <?php endwhile; else: ?>
        <p>La page demandé n'est pas accessible</p>
      <?php endif; ?>
      </div>


    <!-- </div> -->

  <?php get_footer(); ?>
