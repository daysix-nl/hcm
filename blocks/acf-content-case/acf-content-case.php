<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- HTML -->
<section class="bg-white">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-[50px] pb-[50px] lg:pb-[80px]">
        <div class="grid gap-[50px]">
            <div class="item">
                <h2 class="font-raleway font-bold text-[#2885C3] text-22"><?php the_field('marktsituatie_titel');?></h2>
                <div class="h-[1px] w-[115px] bg-[#F18700] my-2"></div>
                <p class="font-poppins font-light text-black text-16 leading-26"><?php the_field('marktsituatie_tekst');?></p>
            </div>
            <div class="item">
                <h2 class="font-raleway font-bold text-[#2885C3] text-22"><?php the_field('oplossing_titel');?></h2>
                <div class="h-[1px] w-[115px] bg-[#F18700] my-2"></div>
                <p class="font-poppins font-light text-black text-16 leading-26"><?php the_field('oplossing_tekst');?></p>
            </div>
            <div class="item">
                <h2 class="font-raleway font-bold text-[#2885C3] text-22"><?php the_field('uitdaging_titel');?></h2>
                <div class="h-[1px] w-[115px] bg-[#F18700] my-2"></div>
                <p class="font-poppins font-light text-black text-16 leading-26"><?php the_field('uitdaging_tekst');?></p>
                <a href="<?php the_field('website');?>" class="h-[52px] px-[30px] bg-[#F18700] hover:bg-[#2885C3] duration-300 items-center justify-center font-poppins font-light text-white text-18 w-fit rounded-full mt-[30px] hidden lg:flex" target="_blank">Bekijk website</a>
            </div>
        </div>
        <div class="hidden lg:grid gap-[50px]">
            <div class="item bg-[#F18700] rounded-[14px] p-[30px] h-fit">
                <h2 class="font-raleway font-bold text-white text-22"><?php the_field('resultaten_titel');?></h2>
                <div class="h-[1px] w-[115px] bg-white my-2"></div>
                <p class="font-poppins font-light text-white text-16 leading-26"><?php the_field('resultaten_tekst');?></p>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-auto rounded-[14px] mt-3">
                <h6 class="font-poppins font-light text-white text-12 leading-22 text-right mt-[10px]"><?php the_field('ondertitel');?></h6>
            </div>
        </div>
    </div>
     <div class="grid gap-[50px] lg:hidden bg-[#F18700]">
        <div class="item container pt-[50px] pb-[30px] h-fit">
            <h2 class="font-raleway font-bold text-white text-22"><?php the_field('resultaten_titel');?></h2>
            <div class="h-[1px] w-[115px] bg-white my-2"></div>
            <p class="font-poppins font-light text-white text-16 leading-26"><?php the_field('resultaten_tekst');?></p>
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-auto rounded-[14px] mt-3">
            <h6 class="font-poppins font-light text-white text-12 leading-22 text-right mt-[10px]"><?php the_field('ondertitel');?></h6>
        </div>
    </div>
    <div class="container my-[50px] flex justify-center lg:hidden">
        <a href="<?php the_field('website');?>" class="h-[52px] px-[30px] bg-[#F18700] hover:bg-[#2885C3] duration-300 items-center justify-center font-poppins font-light text-white text-18 w-fit rounded-full flex lg:hidden" target="_blank">Bekijk website</a>
    </div>
</section>

<?php endif; ?>
