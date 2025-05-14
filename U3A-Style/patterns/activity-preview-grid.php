<?php
/**
 * Title: Activity Preview Grid
 * Slug: U3A-Style/activity-preview-grid
 * Description: A pattern to show three images with links. Defaults to activities.
 * Categories: featured, columns
 * Keywords: activities, courses, grid
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"1400px"}} -->
<div class="wp-block-group has-cool-blue-background-color has-background">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="wp-block-heading has-text-align-center">Explore Our Most Popular Activities</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"columns":3} -->
  <div class="wp-block-columns has-3-columns">

    <!-- wp:column -->
    <div class="wp-block-column activity-column-link">
     <a href="/activities/philosophy-classes">
      <!-- wp:image {"sizeSlug":"medium"} -->
      <figure class="wp-block-image size-medium">
       <img src="<?php echo get_stylesheet_directory_uri(). '/assets/philosophy%20group.jpeg'; ?> " alt="philosophy">
      </figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4} -->
      <h4>Philosophy Sessions</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Learn about the core of human nature in a friendly environment with casual debates and exploration of our minds and personal philosophy</p>
      <!-- /wp:paragraph -->
      </a>
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column activity-column-link">
    <a href="/activities/dancing-class">
      <!-- wp:image {"sizeSlug":"medium"} -->
      <figure class="wp-block-image size-medium">
        <img src="<?php echo get_stylesheet_directory_uri(). '/assets/dancing.JPG'; ?> " alt="dancing">
      </figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4} -->
      <h4>Dancing Class</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Break out those moves on the dance floor! Dancing up a storm, our dance classes make sure that you are ready for that new ball or teach you some good ol' fashion folk dances to classic tunes.</p>
      <!-- /wp:paragraph -->
      </a>
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column activity-column-link">
    <a href="/activities/language-cafe">
      <!-- wp:image {"sizeSlug":"medium"} -->
      <figure class="wp-block-image size-medium">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/FrenchGroup4.JPG'; ?>" alt="Language café">
      </figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4} -->
      <h4>Language Café</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Practice a wide variety of languages including French, Spanish and German while over a good cuppa.</p>
      <!-- /wp:paragraph -->
      </a>
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
