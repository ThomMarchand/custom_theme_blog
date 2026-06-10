<?php get_header() ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post() ?>
    <div class="card mt-3">
      <div class="card-body">
        <h5 class="card-title"><?php the_title() ?></h5>

        <h6 class="card-subtitle mb-2 text-muted"><?php echo implode(', ', array_map(fn($c) => $c->name, get_the_category())); ?></h6>

        <p class="card-text"><?php the_excerpt() ?></p>
        <p><?php foreach((get_the_tags() ?: []) as $tag): ?>
          <span class="badge bg-secondary"><?php echo $tag->name; ?></span>
        <?php endforeach; ?></p>

        <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
      </div>
    </div>
  <?php endwhile; ?>

<?php else: ?>
  <h1>Aucun articles pour le moment</h1>

<?php endif; ?>

<?php get_footer() ?>