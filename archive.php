<?php get_header(); ?>
<body>
  <header>
    <?php get_template_part('entete');?>
  </header>

  <div id="category-section">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <h3>Retrouvez tous les articles de la période sélectionnée :</h3>
          <article id="post-<?php the_ID(); ?>" class="article main-section">

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
          <p class="no-found">Aucun article n'est encore répertorié dans la catégorie suivante</p>
        <?php endif; ?>
    </div>
    <div class="navigation">
      <div class="alignleft"><?php posts_nav_link('','','&laquo; Précedent') ?></div>
      <div class="alignright"><?php posts_nav_link('','Suivant &raquo;','') ?></div>
    </div>

  <?php get_footer(); ?>
