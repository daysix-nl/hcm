<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HTML -->
<section class="bg-white">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-[50px] pb-[80px]">
        <div class="grid gap-[50px]">
            <?php
            if( have_rows('kolom_1') ):
                while( have_rows('kolom_1') ) : the_row(); ?>
                <div class="item">
                    <h2 class="font-raleway font-bold text-[#2885C3] text-22"><?php the_sub_field('titel');?></h2>
                    <div class="h-[1px] w-[115px] bg-[#F18700] my-2"></div>
                    <p class="font-poppins font-light text-black text-16 leading-26"><?php the_sub_field('tekst');?></p>
                </div>
                <?php
                endwhile;
            else :
            endif; 
            ?>
        </div>
        <div class="grid gap-[50px]">
             <?php
            if( have_rows('kolom_2') ):
                while( have_rows('kolom_2') ) : the_row(); ?>
                <div class="item">
                    <h2 class="font-raleway font-bold text-[#2885C3] text-22"><?php the_sub_field('titel');?></h2>
                    <div class="h-[1px] w-[115px] bg-[#F18700] my-2"></div>
                    <p class="font-poppins font-light text-black text-16 leading-26"><?php the_sub_field('tekst');?></p>
                </div>
                <?php
                endwhile;
            else :
            endif; 
            ?>
        </div>
    </div>
</section>

<?php endif; ?>
