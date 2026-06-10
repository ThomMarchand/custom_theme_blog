<div class="card mt-3">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>

    <?php get_template_part('components/molecules/post-meta', null, [
      'categories' => get_the_category(),
      'tags'       => get_the_tags() ?: [],
    ]); ?>

    <p class="card-text"><?php the_excerpt(); ?></p>

    <?php get_template_part('components/atoms/button', null, [
      'url'     => get_permalink(),
      'label'   => 'Voir plus',
      'variant' => 'primary',
    ]); ?>
  </div>
</div>
