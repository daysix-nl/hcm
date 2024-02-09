<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); ?>
<main>
    <?php the_content();?>
     <section>
        <div class="container mb-[50px]">
            <a href="/wat/cat-alle/" class="flex w-fit mx-auto items-center all">
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
                <p class="text-[#0000006a] ml-[10px] font-poppins">Alle casestudies</p>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
