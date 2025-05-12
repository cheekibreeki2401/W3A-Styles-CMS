<?php
/**
 * Title: Activity Content
 * Slug: u3a-Style/activity-content
 * Categories: u3a_style_page
 * Keywords: starter
 * Block Types: core/post-content
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-group">

  <!-- wp:image {"align":"center","sizeSlug":"large"} -->
  <figure class="wp-block-image aligncenter size-large">
    <img src="<?php echo get_theme_file_uri( 'assets/FridayTalk_SuzieDancenorth.jpg' ); ?>" alt="Activity image" />
  </figure>
  <!-- /wp:image -->

  <!-- wp:heading {"level":2} -->
  <h2>What to Expect</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph -->
  <p>This engaging session includes hands-on learning, lively discussion, and support from experienced instructors. It's perfect for beginners and returning participants alike.</p>
  <!-- /wp:paragraph -->

  <!-- wp:heading {"level":3} -->
  <h3>Schedule</h3>
  <!-- /wp:heading -->

  <!-- wp:list -->
  <ul>
    <li>📅 Date(s)</li>
    <li>🕒 10:00 AM – 12:00 PM</li>
    <li>📍 Location</li>
  </ul>
  <!-- /wp:list -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons">
    <!-- wp:button {"backgroundColor":"yellow","textColor":"black"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-yellow-background-color has-text-color has-background">Sign Up Now</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
