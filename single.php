<?php get_header(); ?>
<body>
  <header>
    <?php get_template_part('entete');?>
  </header>
  <?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" class="article-content">
    <h3>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
      </a>
    </h3>

    <div class="postmetadata">
      <p>
        <span>
          #<?php the_category(' #'); ?>
        </span>
        <span>
          <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
        </span>
      </p>
      <p>
        <span>
          <?php the_time('j F Y') ?> <br>
          par <?php the_author() ?>
        </span>
      </p>
    </div>

    <div class="contenu">
      <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>
  </article>

<?php endwhile; else: ?>
  <p>La page demandé n'est pas accessible</p>
  <?php endif; ?>


  <aside class="sidebar-article">
    <?php dynamic_sidebar('widget1'); ?>
  </aside>

  <div class="more_articles">
    <div id="category-section">
      <h3>Articles du même thème</h3>

  <?php
  $categories = get_the_category();
  if ( ! empty( $categories ) ) {
    $category = esc_html($categories[0]->name);

    $args = array( 'post_type' => 'post',
    'category_name'=> $category,
    'showposts' => 3
    );

    $my_query = new WP_Query( $args);

  }
  ?>

  <?php if(have_posts()) : ?>

    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


      <article id="post-<?php the_ID(); ?>" class="article">

          <figure>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(''); ?>
            </a>
            <figcaption class="visible-figcaption">
              <h3><?php the_title(); ?>  </h3>
              <div class="postmetadata">
                Par <?php the_author() ?> le <?php the_time('d/m/Y') ?>
                <p>
                    <?php the_category(' | '); ?>
                </p>
              </div>

            </figcaption>
            <figcaption class="hover-figcaption">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                Extrait :
              <?php the_excerpt(); ?>
              <span>
                Lire la suite...
              </span>
              </a>
            </figcaption>
          </figure>

      </article>
      <?php endwhile; else: ?>
      <p style="margin:50px auto; padding:10px; text-align : center; color: white;">Aucun article n'est encore répertorié dans la catégorie suivante</p>
      <?php endif; ?>

    <?php
    //$slides = new WP_Query( $args);?>
    <?php // if($slides->have_posts()) : ?>

    </div>
  </div>

  <?php get_footer(); ?>
