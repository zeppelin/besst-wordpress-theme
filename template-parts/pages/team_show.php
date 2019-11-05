<div class="mt-20 py-10 bg-gray-800">
  <div class="container mx-auto px-4">
    <div class="team-show-layout">

      <div class="">
        <?php
          $source = get_post_meta(get_the_ID(), 'profile_pic_url', true);
          $fallback = 'https://picsum.photos/id/1025/4951/3301';

          $profile_pic_url = $fallback;

          if ($source) {
            $profile_pic_url = $source;
          }
        ?>

        <img class="w-full block border-b-4 border-red-600" src="<?php echo $profile_pic_url ?>">
      </div>

      <div>
        <h1 class="mb-1 text-3xl uppercase font-bold">
          <?php the_title(); ?>
        </h1>

        <h2 class="mb-6 text-xl uppercase font-bold text-red-600">
          <?php echo get_post_meta(get_the_ID(), 'profession', true) ?>
        </h2>

        <div class="text-content text-lg leading-relaxed">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
