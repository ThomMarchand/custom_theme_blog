<?php
$url     = $args['url']     ?? '#';
$label   = $args['label']   ?? '';
$variant = $args['variant'] ?? 'primary';
?>
<a href="<?php echo esc_url($url); ?>" class="btn btn-<?php echo esc_attr($variant); ?>"><?php echo esc_html($label); ?></a>
