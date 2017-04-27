<?php
  /**
   * @file
   * Default template for dfp tags.
   */
?>

<div <?php print drupal_attributes($placeholder_attributes) ?>>
  <?php if (isset($slug)):
    print drupal_render($slug);
  endif; ?>
  <?php if (isset($display_call)):?>
    <script type="text/javascript">
      <?php print ($display_call);?>
  </script>
  <?php endif; ?>
</div>
