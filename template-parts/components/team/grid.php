<?php
  function get_profile_pic_url_with_fallback($post_id, $fallback) {
    $source = get_post_meta($post_id, 'profile_pic_url', true);

    if ($source) {
      return $source;
    }

    if ($fallback) {
      return $fallback;
    }

    return 'https://picsum.photos/id/1025/4951/3301';
  }

  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

  $current_page = new WP_Query( $args );
?>

<div class="team-grid bg-gray-800 mx-2 md:mx-10 lg:mx-0">
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
          'image' => get_profile_pic_url_with_fallback(get_the_ID(), get_bloginfo('template_url') . '/assets/images/a-team-' . $i . '.jpg')
        );
      ?>

      <div class="team-grid-item">
        <a
          class="team-grid-item-img-wrapper block relative opacity-75 hover:opacity-100 transition-all"
          href="<?php echo $page_obj['link'] ?>"
        >
          <img
            class="w-full object-cover h-full absolute"
            src="<?php echo $page_obj['image'] ?>"
          >
        </a>

        <div class="team-grid-item-info pb-8 lg:pb-4 px-4 lg:pr-4 lg:pl-0">
          <h3 class="mt-6 lg:text-2xl font-bold uppercase mb-1">
            <a
              class="hover:opacity-75 transition-all"
              href="<?php echo $page_obj['link'] ?>"
            >
              <?php echo $page_obj['title']; ?>
            </a>
          </h3>

          <h4 class="font-bold text-sm lg:text-base uppercase mb-3 text-red-600">
            <?php echo $page_obj['profession'] ?>
          </h4>

          <p class="mb-6 text-sm lg:text-base">
            <?php echo $page_obj['intro'] ?>
          </p>

          <a class="font-bold uppercase text-sm hover:opacity-75 transition-all" href="<?php echo $page_obj['link'] ?>">
            Bemutatkozás
          </a>
        </div>
      </div>

    <?php endwhile; ?>
  <?php endif; wp_reset_postdata(); ?>
</div>
