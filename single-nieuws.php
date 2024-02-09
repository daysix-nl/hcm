<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); 
 $thumbnail_id = get_post_thumbnail_id();

// Haal de URL van de thumbnail op
$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];
?>
<main>
    <section class="header-section w-full relative h-auto overflow-hidden lg:min-h-[440px]">
        <section class="h-[7px] w-screen bg-orange"></section>
        <div class="absolute shadow-2xl left-[unset] right-[-120px] md:right-[unset] md:left-[40vw] lg:left-[40vw] xl:left-[45vw] w-[450px] md:w-[700px] lg:w-[750px] xl:w-[770px]  h-auto aspect-square bg-[#F8F8F8] border-[10px] border-[#fff] rounded-[40px] rotate-[135deg] top-[-330px] md:top-[-560px] lg:top-[-540px] xl:top-[-560px] flex overflow-hidden">
            <div class="relative w-[450px] md:w-[700px] lg:w-[750px] xl:w-[770px]">
                <div class="absolute z-10 top-[-140px] left-[100px] md:top-[-240px] md:left-[150px] lg:top-[-190px] lg:left-[140px] xl:top-[-210px] xl:left-[160px] right-0 bottom-[0px] w-[450px] h-[450px] md:w-[700px] md:h-[700px] lg:w-[750px] lg:h-[750px] xl:w-[770px] xl:h-[750px]">
                    <img src="<?php echo $thumbnail_url;?>" alt="<?php echo $image1_alt; ?>" class="z-10 w-[100%] h-[100%] object-cover object-center rotate-[225deg]">
                </div>
            </div>
        </div>
        <section class="bg-hero h-[310px] md:h-[300px] lg:h-[140px]">
            <div class="container relative h-[310px] md:h-[300px] lg:h-[140px]">
                <h1 class="text-25 leading-35 md:text-28 md:leading-38 text-white font-raleway font-light max-w-[390px] mx-auto md:mx-[unset] px-[20px] md:px-[unset] md:max-w-[500px] absolute left-0 top-[unset] bottom-2 right-0"><?php the_title();?></h1>
            </div>
        </section>
    </section>
    <div class="pb-[80px] container mt-[50px] lg:mt-[-155px]">
        <div class="max-w-[775px] text-editor ">
            <?php the_content();?>
        </div>
    </div>
     <section>
        <div class="container mb-[50px]">
            <a href="/nieuws" class="flex w-fit mx-auto items-center all">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <g id="Group_168" data-name="Group 168" transform="translate(-0.191 0.133)">
                            <rect id="Rectangle_25" data-name="Rectangle 25" width="7" height="7" transform="translate(0.191 -0.133)" fill="#0000006a"></rect>
                            <rect id="Rectangle_26" data-name="Rectangle 26" width="7" height="7" transform="translate(11.191 -0.133)" fill="#0000006a"></rect>
                            <rect id="Rectangle_27" data-name="Rectangle 27" width="7" height="7" transform="translate(11.191 10.867)" fill="#0000006a"></rect>
                            <rect id="Rectangle_28" data-name="Rectangle 28" width="7" height="7" transform="translate(0.191 10.867)" fill="#0000006a"></rect>
                        </g>
                    </svg>
                </div>
                <p class="text-[#0000006a] ml-[10px] font-poppins">Alle nieuwsberichten</p>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
