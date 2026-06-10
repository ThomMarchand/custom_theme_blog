<?php get_header() ?>

<?php if (have_posts()): the_post() ?>
  <article class="container mt-4">
    <h1 class="mb-2"><?php the_title() ?></h1>

    <?php get_template_part('components/molecules/post-meta', null, [
      'categories' => get_the_category(),
      'tags'       => get_the_tags() ?: [],
    ]); ?>

    <div><?php the_content() ?></div>

    <?php get_template_part('components/atoms/button', null, [
      'url'     => home_url('/'),
      'label'   => '← Retour',
      'variant' => 'outline-secondary',
    ]); ?>
  </article>
<?php endif; ?>

<?php get_footer() ?>
