<?php
  $href = $args['href'] ?? null;
  $children = $args['children'];

  if($href !== null) :
?>

<a class="Button" href=<?= $href; ?>><?= $children ?></a>

<?php else: ?>

<button class="Button" href=<?= $href; ?>><?= $children ?></button>

<?php endif; ?>