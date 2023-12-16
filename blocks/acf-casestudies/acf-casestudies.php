<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CASESTUDIES -->
<section class="bg-white">
    <div class="container mb-4">
        <h2 class="font-raleway font-bold text-[#2885C3] text-22 mb-3"><?php the_field('titel');?></h2>
        <?php echo do_shortcode( '[fe_widget]' ); ?>
    </div>
    <div id="casestudies" class="container grid grid-cols-3 lg:grid-cols-6 gap-[45px] pb-[80px]">
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'casestudy',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            )
            );
            ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
        <a href="<?php the_permalink();?>" class="w-full aspect-[1/1] border-[1px] border-[#F1F1F1] hover:border-[#F18700] duration-300 rounded-[14px] flex items-center justify-center px-2">
            <img src="<?php the_post_thumbnail_url( );?>" alt="Logo casestudy">
        </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
<?php endif; ?>
