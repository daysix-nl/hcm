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
    <div id="casestudies" class="container grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-[45px] pb-[80px]">
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
        <a id="case" href="<?php the_permalink();?>" class="w-full aspect-[1/1] border-[1px] border-[#F1F1F1] duration-300 rounded-[14px] flex items-center justify-center px-3 pt-3 pb-[55px] md:pb-3 relative overflow-hidden">
            <img src="<?php the_post_thumbnail_url( );?>" alt="Logo casestudy">
            <div class="casehover absolute md:top-0 left-0 right-0 bottom-0 bg-[#f18900E6]">
                <div class="h-full w-full flex items-end justify-center px-1 py-[4px] md:pb-1">
                    <h3 class="text-center font-raleway text-14 text-white font-bold"><?php the_title();?></h3>
                </div>
            </div>
        </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
<?php endif; ?>
