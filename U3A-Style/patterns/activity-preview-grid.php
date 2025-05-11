<?php
/**
 * Title: Activity Preview Grid
 * Slug: U3A-Style/activity-preview-grid
 * Description: A pattern to show three images with links. Defaults to activities.
 * Categories: featured, columns
 * Keywords: activities, courses, grid
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group has-cool-blue-background-color has-background">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="wp-block-heading has-text-align-center">Explore Our Most Popular Activities</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"columns":3} -->
  <div class="wp-block-columns has-3-columns">

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","href":"/activities/stem-classes"} -->
      <figure class="wp-block-image size-medium">
        <a href="/activities/stem-classes"><img src="<?php echo get_theme_file_uri( 'assets/John_STEM_table.jpg' ); ?>" alt="STEM"></a>
      </figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4} -->
      <h4>STEM</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Learn about the core of all things natural and stimulate your mind with our Science, Technology, Engineering and Mathematics classes</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","href":"/activities/dancing-class"} -->
      <figure class="wp-block-image size-medium">
        <a href="/activities/dancing-class"><img src="<?php echo get_theme_file_uri( 'assets/dancing.JPG' ); ?>" alt="dancing"></a>
      </figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4} -->
      <h4>Dancing Class</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Break out those moves on the dance floor! Dancing up a storm, our dance classes make sure that you are ready for that new ball or teach you some good ol' fashion folk dances to classic tunes.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","href":"/activities/language-cafe"} -->
      <figure class="wp-block-image size-medium">
        <a href="/activities/language-cafe"><img src="<?php echo get_theme_file_uri( 'assets/FrenchGroup4.JPG' ); ?>" alt="Language café"></a>
      </figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4} -->
      <h4>Language Café</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Practice a wide variety of languages including French, Spanish and German while over a good cuppa.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
