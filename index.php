<?php get_header() ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post() ?>
    <?php get_template_part('components/organisms/post-card') ?>
  <?php endwhile; ?>
<?php else: ?>
  <h1>Aucun articles pour le moment</h1>
<?php endif; ?>

<?php get_footer() ?>
