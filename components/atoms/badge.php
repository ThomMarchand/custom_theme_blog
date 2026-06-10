<?php
$label = $args['label'] ?? '';
$color = $args['color'] ?? 'secondary';
?>
<span class="badge bg-<?php echo esc_attr($color); ?>"><?php echo esc_html($label); ?></span>
