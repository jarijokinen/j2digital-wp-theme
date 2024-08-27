<?php if (is_home() || is_front_page()): ?>
  <h1 class="header-logo"><?php bloginfo('name'); ?></h1>
<?php else: ?>
  <a href="/" class="header-logo"><?php bloginfo('name'); ?></a>
<?php endif; ?>
