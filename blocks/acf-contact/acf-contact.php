<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<section class="pb-5 lg:pb-[75px] relative pt-5 lg:pt-0 bg-white">
    <div class="container grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 flex flex-col lg:mt-[-155px]">
            <div class="flex flex-row mb-1">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">Bezoekadres</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24"><?php the_field('bezoekadres');?></p>
                </div>
            </div>
    
            <div class="flex flex-row">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">Postadres</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24"><?php the_field('postadres');?></p>
                </div>
            </div>
            <div class="w-[115px] h-[1px] bg-[#F18700] my-[25px]"></div>
            <div class="flex flex-row">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">Telefoon</h4>
                </div>
                <div>   
                    <a href="tel:<?php the_field('telefoon');?>" class="font-poppins font-light text-black hover:text-[#F18700] text-14 lg:text-15 leading-24"><?php the_field('telefoon');?></a>
                </div>
            </div>
            <div class="flex flex-row">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">WhatsApp</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black hover:text-[#F18700] text-14 lg:text-15 leading-24"><?php the_field('whatsapp');?></p>
                </div>
            </div>
            <div class="w-[115px] h-[1px] bg-[#F18700] my-[25px]"></div>
            <div class="flex flex-row">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">Email</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black hover:text-[#F18700] text-14 lg:text-15 leading-24"><a href="mailto:<?php the_field('e-mail');?>"><?php the_field('e-mail');?></a></p>
                </div>
            </div>
            <div class="w-[115px] h-[1px] bg-[#F18700] my-[25px]"></div>
            <div class="flex flex-row mb-1">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">Bank</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24"><?php the_field('bank');?></p>
                </div>
            </div>
            <div class="flex flex-row">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">KvK</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24"><?php the_field('kvk');?></p>
                </div>
            </div>
            <div class="flex flex-row">
                <div class="w-[115px]">
                    <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24">BTW</h4>
                </div>
                <div>   
                    <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24"><?php the_field('btw');?></p>
                </div>
            </div>
        </div>
        <div style="-webkit-filter: grayscale(75%);
filter: grayscale(100%);" class="col-span-1 overflow-hidden lg:mt-[-50px] hidden lg:flex">
            <iframe class="mt-[-120px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.2597699615612!2d4.879997112841088!3d52.202326659583036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c675b12e9e299b%3A0xd81c6a9caca5213f!2sHandling%20Company%20B.V.!5e0!3m2!1snl!2snl!4v1703336257302!5m2!1snl!2snl&z=18" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<section class="bg-[#F0F0F0] pt-6 lg:pt-5 pb-8 lg:pb-7">
    <div class="container">
        <h4 class="font-raleway font-bold text-[#2885C3] text-22">Direct contact</h4>
        <div class="w-[115px] h-[1px] bg-[#F18700] mb-4 mt-[25px]"></div>
        <div class="flex space-x-[25px] lg:space-x-[15px]">
            <div class="w-9 h-9 lg:w-[110px] lg:h-[110px] bg-white rounded-md overflow-hidden">
                <?php
                $image = get_field('direct_afbeelding');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover objec-center">
            </div>
            <div>
                 <h4 class="font-raleway font-bold text-black text-14 lg:text-15 leading-24 mb-[5px"><?php the_field('direct_naam');?></h4>
                 <p class="font-poppins font-light text-black text-14 lg:text-15 leading-24"><?php the_field('direct_content');?></p>
                 <a href="<?php the_field('direct_linkedin');?>" target="_blank">
                    <svg class="w-2 h-2 lg:w-3 lg:h-3" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 40.1 40.1" viewBox="0 0 40.1 40.1">
                        <path d="M5.7 3.5h28.7c1.1.2 1.9.8 2.2 1.8.3.9.1 2.3.1 3.6v21.9c0 1.2.1 2.5 0 3.6-.1 1.3-1.1 2-2.2 2.2H5.7c-1.3-.2-2-.9-2.2-2.2V5.7c.2-1.3.9-2 2.2-2.2m2.2 7.4c0 2.2 2.5 3.7 4.4 2.5.4-.2.7-.6.9-.9 1.3-2.2-.5-4.5-2.6-4.4-1.5 0-2.7 1.2-2.7 2.8M30.1 17c-1-1-2.6-1.6-4.6-1.5-2.1.1-3.5 1.2-4.4 2.5v-2.1h-4.8v15.8h5v-5.5c0-2-.2-3.9.5-5.1.5-1 2.3-1.8 3.7-1 1.6.9 1.3 3.7 1.3 6.3v5.3h5c-.4-5 1-11.9-1.7-14.7M8.3 16v15.7h5V15.9H8.4c-.1 0-.1.1-.1.1" style="fill:#006fb9"/>
                    </svg>
                 </a>
            </div>
        </div>
    </div>
</section>

<div class="overflow-hidden lg:hidden">
    <iframe class="mt-[-120px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.2597699615612!2d4.879997112841088!3d52.202326659583036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c675b12e9e299b%3A0xd81c6a9caca5213f!2sHandling%20Company%20B.V.!5e0!3m2!1snl!2snl!4v1703336257302!5m2!1snl!2snl" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php endif; ?>