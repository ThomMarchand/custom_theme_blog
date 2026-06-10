<?php
$categories = $args['categories'] ?? [];
$tags       = $args['tags']       ?? [];
?>
<div class="text-muted mb-2">
  <?php echo esc_html(implode(', ', array_map(fn($c) => $c->name, $categories))); ?>
  <?php if(!empty($tags)): ?>
    &nbsp;|&nbsp;
    <?php get_template_part('components/molecules/tag-list', null, ['tags' => $tags]); ?>
  <?php endif; ?>
</div>
