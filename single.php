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
          #<?php the_category(' #') ?>
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

  <div class="">
    <!-- mettre 3 articles similaire (meme tag)     -->
  </div>
  <?php get_footer(); ?>
