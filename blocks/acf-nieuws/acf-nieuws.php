<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: 
function cut_string_at_word($string, $max_length, $end='...') {
    if (strlen($string) <= $max_length)
        return $string;
    $output = substr($string, 0, $max_length);
    $last_space = strrpos($output, ' ');
    $output = substr($output, 0, $last_space);
    return $output . $end;
}

?>
    <section>
        <div class="container grid grid-cols-3 gap-x-[35px] gap-y-6 pb-6">
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
                <img class="rounded-[16px] mb-2 h-[245px]" src="<?php the_post_thumbnail_url( );?>" alt="<?php the_title(); ?>">
                <h4 class="font-raleway font-bold text-[#2885C3] text-22 leading-32">Nieuwe website online</h4>
                <div class="w-[115px] h-[1px] bg-[#F18700] mt-2 mb-2"></div>
                <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24 mb-2"><?php     echo cut_string_at_word("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text", 80, "....."); ?></p>
                <span class="h-[35px] px-2 flex justify-center items-center text-white bg-[#F18700] rounded-full w-fit text-15 leading-15" href="#">
                    Lees verder
                </span>
            </a>
        <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>
<?php endif; ?>