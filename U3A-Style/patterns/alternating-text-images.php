<?php
/**
 * Title: Alternating Image and Text Sections
 * Slug: U3A-Style/alternating-image-text
 * Categories: layout, text
 * Keywords: image, text, alternating, layout, sections
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"1200px"},"style":{"spacing":{"blockGap":"3rem"}}} -->
<div class="wp-block-group">

  <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":true} -->
  <div class="wp-block-columns are-vertically-aligned-center">
    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="width:50%">
      <!-- wp:image {"sizeSlug":"large"} -->
      <figure class="wp-block-image size-large">
        <img src="<?php echo get_stylesheet_directory_uri( 'assets/FridayTalks.JPG' ); ?>" alt="Community gathering" />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="width:50%">
      <!-- wp:heading -->
      <h2>Engaging Community Life</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Join group events, classes, and social gatherings every week. Our Third Age community are never short of something exciting to look forward to.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":true} -->
  <div class="wp-block-columns are-vertically-aligned-center">
    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="width:50%">
      <!-- wp:heading -->
      <h2>Life-Long Learning Opportunities</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>With topics ranging from languages to art history, participants can continue to grow, learn, and explore new interests well into retirement.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="width:50%">
      <!-- wp:image {"sizeSlug":"large"} -->
      <figure class="wp-block-image size-large">
        <img src="<?php echo get_stylesheet_directory_uri( 'assets/learning.JPG' ); ?>" alt="Learning activity" />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group -->
