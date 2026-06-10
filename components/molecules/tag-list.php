<?php foreach(($args['tags'] ?? []) as $tag): ?>
  <?php get_template_part('components/atoms/badge', null, ['label' => $tag->name, 'color' => 'secondary']); ?>
<?php endforeach; ?>
