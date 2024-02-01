<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: 


?>
    <section class="bg-white">
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-[35px] gap-y-6 pb-6">
        <?php
            $loop = new WP_Query( 
                array(
                    'post_type' => 'nieuws',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                )
            );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <a href="<?php the_permalink();?>" class="w-full ">
                <div class="h-[245px] w-full rounded-[16px] mb-2 overflow-hidden">
                    <img class="min-h-full min-w-full object-cover object-center" src="<?php the_post_thumbnail_url( );?>" alt="<?php the_title(); ?>">
                </div>
                
                <h4 class="font-raleway font-bold text-[#2885C3] text-22 leading-32">Nieuwe website online</h4>
                <div class="w-[115px] h-[1px] bg-[#F18700] mt-2 mb-2"></div>
                <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24 mb-2 max-w-[360px] line-clamp-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
                <span class="h-[35px] px-2 flex justify-center items-center text-white bg-[#F18700] rounded-full w-fit text-15 leading-15" href="#">
                    Lees verder
                </span>
            </a>
        <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>
<?php endif; ?>