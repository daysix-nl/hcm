<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER -->
<section class="header-section w-full relative h-auto overflow-hidden bg-white lg:min-h-[440px]">
    <section class="h-[7px] w-screen bg-orange"></section>
    <div class="absolute shadow-2xl left-[unset] right-[-120px] md:right-[unset] md:left-[40vw] lg:left-[40vw] xl:left-[45vw] w-[450px] md:w-[700px] lg:w-[750px] xl:w-[770px]  h-auto aspect-square bg-[#F8F8F8] border-[10px] border-[#fff] rounded-[40px] rotate-[135deg] top-[-330px] md:top-[-560px] lg:top-[-540px] xl:top-[-560px] flex overflow-hidden">
        <?php if (get_field('beeld') !== "afbeelding"): ?>
        <?php
        $image = get_field('logo');
        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
        ?>   
        <div class="relative z-10 w-full h-full rotate-[225deg] pt-[88%] md:pt-[95%] lg:pt-[85%] xl:pt-[85%] flex justify-center items-center origin-center bg-[#f8f8f8]">
            <img class=" w-full max-w-[115px]  md:max-w-[150px] lg:max-w-[200px] z-10 mix-blend-multiply" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </div>
        <?php endif; ?>
       <?php if (get_field('beeld') !== "logo"): ?> 
        <?php
        $image1 = get_field('afbeelding');
        $image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
        $image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
        ?>     
        <div class="relative w-[450px] md:w-[700px] lg:w-[750px] xl:w-[770px]">
            <div class="absolute z-10 top-[-140px] left-[100px] md:top-[-240px] md:left-[150px] lg:top-[-190px] lg:left-[140px] xl:top-[-210px] xl:left-[160px] right-0 bottom-[0px] w-[450px] h-[450px] md:w-[700px] md:h-[700px] lg:w-[750px] lg:h-[750px] xl:w-[770px] xl:h-[750px]">
                <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="z-10 w-[100%] h-[100%] object-cover object-center rotate-[225deg]">
            </div>
        </div>
        <?php endif; ?>
    </div>
    <section class="bg-hero h-[310px] md:h-[300px] lg:h-[140px]">
        <div class="container relative h-[310px] md:h-[300px] lg:h-[140px]">
            <h1 class="text-25 leading-35 md:text-28 md:leading-38 text-white font-raleway font-light max-w-[390px] mx-auto md:mx-[unset] px-[20px] md:px-[unset] md:max-w-[500px] absolute left-0 top-[unset] bottom-2 right-0"><?php the_field('titel');?> <?php if (get_field('subtitel')): ?><br><span class="font-bold"><?php the_field('subtitel');?></span><?php endif; ?></h1>
        </div>
    </section>
    <?php if (get_field('tekst')): ?>
    <section vlass="bg-white">
        <div class="container py-4">
            <p class="text-black text-18 leading-28 md:text-20 md:leading-40 lg:w-[580px] font-poppins font-light"><?php the_field('tekst');?></p>
        </div>
    </section>
    <?php endif; ?>
</section>
<?php endif; ?>
