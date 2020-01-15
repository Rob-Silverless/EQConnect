<?php $background = get_field("hero_background_image"); if($background): ?>

<div class="background-image" style="background-image: url(<?php echo $background["sizes"]["large"]; ?>);"></div>

<?php endif; ?>