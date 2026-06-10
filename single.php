<?php get_header() ?>

<?php if (have_posts()): the_post() ?>
  <article class="container mt-4">
    <h1 class="mb-2"><?php the_title() ?></h1>

    <div class="text-muted mb-3">
      <?php echo implode(', ', array_map(fn($c) => $c->name, get_the_category())); ?>
      <?php if(get_the_tags()): ?>
        &nbsp;|&nbsp;
        <?php foreach(get_the_tags() as $tag): ?>
          <span class="badge bg-secondary"><?php echo $tag->name; ?></span>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <div><?php the_content() ?></div>

    <a href="<?php echo home_url('/'); ?>" class="btn btn-outline-secondary mt-4">← Retour</a>
  </article>
<?php endif; ?>

<?php get_footer() ?>
