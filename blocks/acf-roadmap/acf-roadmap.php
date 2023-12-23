<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>

    <section class="grid-cols-7 container relative pb-[45px] hidden md:grid">
        <div class="col-span-2 hidden lg:block">
            <div class="circle-roadmap top-10 sticky w-full flex flex-col items-center">
                <div class="h-[200px] w-[200px] rounded-full bg-[#F18700] mx-auto z-10 border-[10px] border-white shadow-2xl flex justify-center items-center p-3">
                    <?php include get_template_directory() . '/img/icon/icon-light.php'; ?>
                </div>
                <h3 class="text-25 leading-35 md:text-28 md:leading-38 text-[#2885C3] mt-4 max-w-[186px] text-center">HCM 10 stappen- proces</h3>
            </div>
        </div>
        <div class="col-span-7 lg:col-span-5">
            <section class="timeline">
                <div class="">
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                                <?php include get_template_directory() . '/img/icon/icon-stap-1.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#F18700]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">1.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Bespreken van de opdracht</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Goed luisteren en verbetervoorstellen delen om kwaliteit toe te voegen of tijd en geld te besparen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-2.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#006FB9]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">2.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Uitwerken van de opdracht</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Debriefing sturen aan de opdrachtgever voor akkoord, inclusief begrotingen planning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-3.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#F18700]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">3.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Actualiseren HCM-Portaal</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Checklist onderdelen, kritische data en alle actuele communicatie over de opdracht is online in het HCM-Portaal beschikbaar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-4.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#006FB9]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">4.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Inplannen ontvangst componenten of produceren drukwerk, enveloppen en verpakkingen</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Kritische data actief controleren; alle componenten fotograferen bij binnenkomst en met de opdrachtgever delen voor akkoord</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-5.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#F18700]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">5.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Productie van de opdracht</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Kwaliteitscontrole bedrijfsbureau, modellen fotograferen en delen met de opdrachtgever voor akkoord</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-6.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#006FB9]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">6.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Plan B ontwikkelen</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Als deadlines onder druk staan – plan B maken en afstemmen met de opdrachtgever</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-7.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#F18700]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">7.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Foto’s van de modellen verzenden voor akkoord</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Akkoord opdrachtgever voor verzending – registreren in HCM Portaal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-8.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#006FB9]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">8.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Akkoord opdrachtgever – verzenden</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Logistiek inplannen, verzend- en afleverbewijs delen met de opdrachtgever</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-9.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#F18700]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">9.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">FAfronden opdracht</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Proces evalueren en verbeterpunten benoemen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container right relative h-[164px]">
                        <div class=" mx-auto z-10 border-[5px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-2 rounded-full h-[139px] w-[139px] mr-[-100px] absolute top-1/2  -translate-y-1/2 left-0">
                            <?php include get_template_directory() . '/img/icon/icon-stap-10.php'; ?>
                        </div>
                        <div class="content px-2 lg:lg:pl-5 lg:pr-3 ml-[75px] bg-[#006FB9]">
                            <div class="ml-[65px] lg:ml-5 flex items-center">
                                <div class="mr-3 lg:mr-[50px]">
                                    <h3 class="font-poppins text-white text-40">10.</h3>
                                </div>
                                <div>
                                    <h2 class="font-raleway font-bold text-white text-16 lg:text-19 mb-1 lg:mb-[15px]">Evaluatie</h2>
                                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Toevoegen aan het HCM-portal als referentie voor toekomstige projecten</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <section class="md:hidden">
        <div class="container">
            <h3 class="text-25 leading-35 text-[#2885C3] text-center mb-2">HCM 10 stappen- proces</h3>
        </div>

    <div class="relative">
        <div class="w-full flex flex-col items-center pb-8">
            <div class="h-[130px] w-[130px] rounded-full bg-[#F18700] mx-auto  border-[5px] border-white shadow-2xl flex justify-center items-center p-2 relative z-20">
                <?php include get_template_directory() . '/img/icon/icon-light.php'; ?>
            </div>
        </div>
        <div class="h-[100px] bg-[#F18700] absolute top-10 -translate-x-1/2 left-1/2 w-[1px]"></div>
    </div>

        <article class="flex bg-[#F18700] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-1.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    1.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Bespreken van de opdrach</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Goed luisteren en verbetervoorstellen delen om kwaliteit toe te voegen of tijd en geld te besparen</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#006FB9] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-2.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    2.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Uitwerken van de opdracht</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Debriefing sturen aan de opdrachtgever voor akkoord, inclusief begroting en planning</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#F18700] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-3.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    3.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Actualiseren HCM-Portaal</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Checklist onderdelen, kritische data en alle actuele communicatie over de opdracht is online in het HCM-Portaal beschikbaar</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#006FB9] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-4.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    4.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Inplannen ontvangst componenten of produceren drukwerk, enveloppen en verpakkingen</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Kritische data actief controleren; alle componenten fotograferen bij binnenkomst en met de opdrachtgever delen voor akkoord</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#F18700] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-5.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    5.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Productie van de opdracht</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Kwaliteitscontrole bedrijfsbureau, modellen fotograferen en delen met de opdrachtgever voor akkoord</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#006FB9] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-6.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    6.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Plan B ontwikkelen</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Als deadlines onder druk staan – plan B maken en afstemmen met de opdrachtgever</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#F18700] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-7.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    7.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Foto’s van de modellen verzenden voor akkoord</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Akkoord opdrachtgever voor verzending – registreren in HCM Portaal</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#006FB9] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-8.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    8.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Akkoord opdrachtgever – verzenden</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Logistiek inplannen, verzend- en afleverbewijs delen met de opdrachtgever</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#F18700] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-9.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    9.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Afronden opdracht</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Proces evalueren en verbeterpunten benoemen</p>
                </div>
            </div>
        </article>

        <article class="flex bg-[#006FB9] pt-5 pb-5 relative timeline-container-mobile">
            <div class="container flex space-x-1 ">
                <div class=" mx-auto z-10 border-[3px] bg-white border-[#F0F0F0] shadow-2xl flex justify-center items-center p-1 rounded-full h-[85px] w-[85px] absolute top-[-42.5px] -translate-x-1/2 left-1/2 ">
                    <?php include get_template_directory() . '/img/icon/icon-stap-10.php'; ?>
                </div>
                <div class="font-raleway font-bold text-white text-19">
                    10.
                </div>
                <div>
                    <h2 class="font-raleway font-bold text-white text-19 mb-[5px]">Evaluatie</h2>
                    <p class="font-poppins font-light text-white text-14 lg:text-15 leading-24">Toevoegen aan het HCM-portal als referentie voor toekomstige projecten</p>
                </div>
            </div>
        </article>

    </section>

<?php endif; ?>
