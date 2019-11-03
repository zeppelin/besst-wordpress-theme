<?php
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

  $current_page = new WP_Query( $args );
?>

<div class="team-grid">
  <?php if ( $current_page->have_posts() ) : ?>
    <?php $i = 0; ?>
    <?php while ( $current_page->have_posts() ) : $current_page->the_post(); ?>
      <?php
        $i++;
        $page_id = get_the_ID();
        $page_obj = array(
          'id' => get_the_ID(),
          'title' => get_the_title(),
          'profession' => get_post_meta($page_id, 'profession', true),
          'intro' => get_post_meta($page_id, 'intro', true),
          'link' => get_permalink($page),
          'image' => get_bloginfo('template_url') . '/assets/images/a-team-' . $i . '.jpg'
        );
      ?>

      <div class="team-grid-item">
        <a href="<?php echo $page_obj['link'] ?>">
          <img class="w-auto" src="<?php echo $page_obj['image'] ?>">
        </a>

        <div class="team-grid-item-info">
          <h3 class="team-grid-item-heading">
            <a href="<?php echo $page_obj['link'] ?>">
              <?php echo $page_obj['title']; ?>
            </a>
          </h3>

          <h4 class="team-grid-item-subheading">
            <?php echo $page_obj['profession'] ?>
          </h4>

          <p class="team-grid-item-lead">
            <?php echo $page_obj['intro'] ?>
          </p>

          <a class="team-grid-item-link" href="<?php echo $page_obj['link'] ?>">
            Bemutatkozás
          </a>
        </div>
      </div>

    <?php endwhile; ?>
  <?php endif; wp_reset_postdata(); ?>
</div>
