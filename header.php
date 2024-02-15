<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 $URL =  $_SERVER['REQUEST_URI'];
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&family=Raleway:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block' ); ?>>
<header id="site-header" class="h-10 bg-white flex items-center z-[999] fixed top-0 left-0 right-0">
    <div class="container flex items-center justify-between">
        <a href="/">
            <svg class="w-[172px] md:w-[172px]" xmlns="http://www.w3.org/2000/svg" width="180px"  xml:space="preserve" id="Layer_1" x="0" y="0" style="enable-background:new 0 0 439.4 155.9" version="1.1" viewBox="0 0 439.4 155.9"><style>.st1{fill:#006fb9;stroke:#006fb9;stroke-width:5.000000e-02}.st2{fill:#1d1d1b}.st3{fill:#fff}</style><path d="M438.5 88c0 9.4-7.6 17-17 17h-96.6c-9.4 0-17-7.6-17-17V23.7c0-9.4 7.6-17 17-17h96.6c9.4 0 17 7.6 17 17V88z" style="fill:#f18700;stroke:#f18700;stroke-width:5.000000e-02"/><path d="M2 17.1C2 10.7 6.2 6.4 12.8 6.4s10.7 4.3 10.7 10.7v26.7h39V17.1c0-6.4 4.2-10.7 10.7-10.7 6.5 0 10.7 4.3 10.7 10.7v76.2c0 6.4-4.2 10.7-10.7 10.7-6.6 0-10.7-4.3-10.7-10.7V61.9h-39v31.4c0 6.4-4.2 10.7-10.7 10.7S2 99.8 2 93.4V17.1zM142.5 5.9c24.6 0 38.1 15.5 38.1 24.6 0 6-3.3 9.7-9.7 9.7-12.4 0-8.8-17-28.4-17-13.5 0-24.6 11.7-24.6 32.1 0 17.2 6.8 32.1 25.4 32.1 16.9 0 16.5-18.1 26.9-18.1 5.2 0 10.5 3 10.5 8.3 0 13.6-16.5 27.1-37.3 27.1-29.5 0-46.9-16.9-46.9-49.4-.1-26.6 15.6-49.4 46-49.4zM193.9 17c0-8.6 5.9-10.6 11.7-10.6h6.3c6.7 0 9.8 2.6 12.1 9.8l18.7 60.5h.3l18.5-60.5c2.2-7.2 5.4-9.8 12.1-9.8h6c5.8 0 11.7 2 11.7 10.6v76.6c0 5.4-2.6 10.5-9.6 10.5-6.9 0-9.6-5.1-9.6-10.5V35.2h-.3l-20 62.6c-1.4 4.5-4.7 6.3-9.2 6.3-4.5 0-7.7-1.8-9.2-6.3l-20-62.6h-.4v58.4c0 5.4-2.6 10.5-9.6 10.5-6.9 0-9.6-5.1-9.6-10.5V17z" class="st1"/><path d="M16.9 143.9h-3v-11H5.4v11h-3v-22.8h3v9.3h8.5v-9.3h3v22.8zM23.2 131.9c0-3.9 1.8-5.6 6.2-5.6 5.6 0 5.6 3.1 5.6 4.9v9.6c0 .7 0 1.4.9 1.4.4 0 .6-.1.7-.2v1.9c-.2 0-1 .2-1.7.2-1.1 0-2.5 0-2.6-2.2h-.1c-.9 1.5-2.7 2.5-4.5 2.5-3.5 0-5-1.9-5-5 0-2.4 1.1-4.1 3.5-4.7l3.9-1.1c2.1-.6 2.1-1.2 2.1-2.6 0-1.6-1-2.5-3-2.5-3.2 0-3.2 2.8-3.2 3.4v.2h-2.8zm9 2.7c-1.1 1.1-3.6 1.3-4.9 2-.9.5-1.4 1.2-1.4 2.7 0 1.7.7 2.9 2.6 2.9 1.9 0 3.7-1.5 3.7-3.3v-4.3zM41.8 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-17.1zM72.9 143.9h-2.8v-2.1H70c-.4 1.3-2 2.6-4 2.6-4.4 0-6-3.6-6-9 0-3.6.6-9 5.8-9 1.7 0 3.4.9 4.1 2.4h.1v-7.6h2.9v22.7zm-6.5-1.8c3.2 0 3.7-2.8 3.7-6.7 0-3.3-.6-6.7-3.7-6.7-2.7 0-3.4 2.6-3.4 6.7 0 4 .7 6.7 3.4 6.7zM79.7 121.1h2.9v22.8h-2.9v-22.8zM89.6 121.1h2.9v3.1h-2.9v-3.1zm0 5.7h2.9V144h-2.9v-17.2zM99.3 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-17.1zM130.3 142.8c0 5.1-2.6 7-6.3 7-1.1 0-5.6 0-6.1-4.3h2.9c.1 1.6 1.5 2.2 3 2.2 3.7 0 3.6-2.7 3.6-3.8v-2.2h-.1c-.6 1.4-2.3 2.3-4.2 2.3-5.4 0-5.7-6.3-5.7-8.6 0-4.6 1.3-9 6-9 2 0 3.6 1.3 4 2.6h.1v-2.2h2.8v16zm-9.8-7.5c0 2.8.4 6.3 3.4 6.3 3.1 0 3.8-2.8 3.8-6.3 0-3.3-.6-6.7-3.7-6.7-2.8 0-3.5 2.6-3.5 6.7zM164.6 136.1c-.3 4.3-2.1 8.3-7.5 8.3-7 0-7.9-6.1-7.9-11.9 0-5.8 1.1-11.9 7.9-11.9 5 0 7.2 2.6 7.3 7.1h-3.2c-.1-2.6-1-4.8-4.1-4.8-4.2 0-4.8 4.3-4.8 9.6s.6 9.6 4.8 9.6c3.7 0 4.2-3.2 4.3-6h3.2zM175.9 126.3c5.4 0 6.7 4.2 6.7 9s-1.3 9-6.7 9-6.7-4.2-6.7-9 1.4-9 6.7-9zm3.6 9c0-3.7-.6-6.9-3.7-6.9-2.9 0-3.6 3.2-3.6 6.9s.6 6.9 3.6 6.9c3.1 0 3.7-3.2 3.7-6.9zM187.9 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 2.1 0 3.4.8 4 2.7.8-1.5 2.5-2.7 4.4-2.7 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.5-3.5-1.3 0-3.5.8-3.5 3.5v11.8h-2.9v-11.8c0-1.3-.1-3.5-2.5-3.5-1.3 0-3.5.8-3.5 3.5v11.8h-2.9v-17.1zM214.8 126.8h2.8v2.1h.1c.4-1.3 2-2.6 4-2.6 4.4 0 6.1 3.6 6.1 8.7 0 3.9-1.2 9.3-6.1 9.3-1.7 0-3.2-.9-3.9-2.4h-.1v7.6h-2.9v-22.7zm6.5 15.3c2.7 0 3.4-2.6 3.4-7 0-3.8-.7-6.4-3.4-6.4-3.2 0-3.7 2.8-3.7 6.7-.1 3.3.6 6.7 3.7 6.7zM233.2 131.9c0-3.9 1.8-5.6 6.2-5.6 5.6 0 5.6 3.1 5.6 4.9v9.6c0 .7 0 1.4.9 1.4.4 0 .6-.1.7-.2v1.9c-.2 0-1 .2-1.7.2-1.1 0-2.5 0-2.6-2.2h-.1c-.9 1.5-2.7 2.5-4.5 2.5-3.5 0-5-1.9-5-5 0-2.4 1.1-4.1 3.5-4.7l3.9-1.1c2.1-.6 2.1-1.2 2.1-2.6 0-1.6-1-2.5-3-2.5-3.2 0-3.2 2.8-3.2 3.4v.2h-2.8zm8.9 2.7c-1.1 1.1-3.6 1.3-4.9 2-.9.5-1.4 1.2-1.4 2.7 0 1.7.7 2.9 2.6 2.9 1.9 0 3.7-1.5 3.7-3.3v-4.3zM251.8 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-17.1zM268.7 126.8h3.2l3.7 13.8h.1l3.2-13.8h3.2l-5.4 18.3c-.7 2.4-1.5 4.5-4.9 4.5-1.1 0-1.6-.1-2.1-.1v-2.1c.4.1 1 .1 1.7.1 1.3 0 1.9-.7 2.3-1.7l.6-1.5-5.6-17.5zM300 121.1h5.1l4.9 18.1h.1l4.9-18.1h5.1v22.8h-3v-20h-.1l-5.5 20h-3l-5.5-20h-.1v20h-3v-22.8zM327.2 124.1h2.9V121h-2.9v3.1zm0 19.8h2.9v-17.2h-2.9v17.2zM340 145.6c0 2.8-1.3 4.2-4.4 4.2-.4 0-.9-.1-1.3-.1v-2.3c.3 0 .7.1 1.1.1 1.8 0 1.8-1.3 1.8-2.9v-17.9h2.9v18.9zm0-21.5h-2.9V121h2.9v3.1zM358.1 143.9h-2.8v-2.1h-.1c-.4 1.3-2 2.6-4 2.6-4.4 0-6-3.6-6-9 0-3.6.6-9 5.8-9 1.7 0 3.4.9 4.1 2.4h.1v-7.6h2.9v22.7zm-6.4-1.8c3.2 0 3.7-2.8 3.7-6.7 0-3.3-.6-6.7-3.7-6.7-2.7 0-3.4 2.6-3.4 6.7 0 4 .7 6.7 3.4 6.7zM364.8 126.8h2.9v2.6h.1c.8-1.6 1.9-3 4-3 .6 0 1 .1 1.3.2v2.6c-.3 0-.6-.1-1.6-.1-1.5 0-3.8 1.2-3.8 4.1V144h-2.9v-17.2zM380.2 135.7c0 2.6 0 6.6 3.6 6.6 2.8 0 3.1-2.7 3.1-4h2.9c0 1.8-1.2 6.1-6.2 6.1-4.5 0-6.4-2.9-6.4-8.8 0-4.3.9-9.2 6.6-9.2 5.7 0 6.2 4.6 6.2 8.3v1.1h-9.8zm6.7-2.2v-.9c0-1.9-.7-4.2-3.2-4.2-3 0-3.4 3.5-3.4 4.5v.6h6.6zM404.8 132c0-1.7-.7-3.6-2.9-3.6-1.8 0-3.6.8-3.6 7.1 0 2.2 0 6.7 3.5 6.7 2.5 0 3-2.4 3-4.3h2.9c0 2.7-1.5 6.4-6.1 6.4-4.5 0-6.4-2.9-6.4-8.8 0-4.3.9-9.2 6.6-9.2 5 0 5.9 3.7 5.9 5.7h-2.9zM413.6 121.1h2.9v7.6h.1c.8-1.4 2.8-2.4 4.5-2.4 4.8 0 4.8 3.4 4.8 5.4v12.2H423v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-22.8zM433.3 121.8h2.9v5h3.2v2.1h-3.2v11c0 1.4.4 1.9 1.9 1.9.6 0 1-.1 1.3-.1v2.2c-.4.1-1.1.2-2.3.2-3 0-3.7-1.2-3.7-3.4v-11.8h-2.7v-2.1h2.7v-5z" class="st2"/><path d="M381.7 86.9c-.3 4.7 3.9 8.6 9.5 8.9 5.6.3 10.2-3.1 10.4-7.8.3-4.7-3.9-8.6-9.5-8.9-5.5-.3-10.1 3.1-10.4 7.8zm.9 0c.2-3.8 4.5-6.8 9.5-6.5 4.9.3 8.9 3.7 8.7 7.5s-4.5 6.8-9.5 6.5c-4.9-.2-8.9-3.7-8.7-7.5z" class="st3"/><path d="M409.4 61.7c-.1 0-.1 0-.1.1l-24.9 19.9c-.2.2-.3.6-.2.9.1.3.4.5.6.3 0 0 24.7-19.7 24.8-19.8.4-.1 7.5-1.6 10.2 2.2.8 1 1.1 2.4 1 4.1-.5.5-21 21.4-21 21.4-.1.1-.2.3-.2.5 0 .1-.1.4-.1.6.1.3.3.7.5.5l21.5-22.1c.1-.1.2-.3.2-.5.1-2.3-.3-4.1-1.3-5.5-3.1-4.5-10.6-2.7-11-2.6zM327.2 20.5c-.3 0-.6.3-.6.6v26.4c0 .3.3.6.6.6h39.3c.3 0 .6-.3.6-.6V21.1c0-.3-.3-.6-.6-.6h-39.3zm38.6 1.2v25.2h-38V21.7h38z" class="st3"/><path d="M328.8 22.7c-.2.3-.1.6.1.8L346.3 37c.2.1.5.1.7 0l18-13.4c.2-.2.3-.6.1-.8-.2-.2-.6-.3-.8-.1 0 0-17 12.6-17.7 13.1-.7-.5-17-13.2-17-13.2-.3-.2-.6-.1-.8.1zM346 60.8 329 66c-.2.1-.4.3-.4.5s.2.3.4.4c-.3 0-.6.2-.6.5v23c0 .2.2.4.4.5l17.8 5.7c.2.1.3 0 .5 0l17.5-6.5c.2-.1.4-.3.4-.5l-.2-24.1c0-.2-.1-.3-.3-.4-.2-.1-.4-.1-.6-.1 0 0-16.6 5.3-17 5.4-.4-.1-12.9-3.3-15.7-4 2.7-.8 14.8-4.5 15.1-4.6.4.1 16.5 3.4 16.5 3.4.3.1.7-.1.8-.4.1-.3-.1-.6-.5-.6l-16.7-3.5c-.2.1-.3.1-.4.1zm1.1 10.7s14.8-4.7 16.3-5.2c0 1.4.2 22.4.2 23-.7.3-16.5 6.1-16.9 6.3-.5-.2-16.4-5.3-17.1-5.5V67.5c0-.1-.1-.3-.2-.3.8.2 17.3 4.4 17.3 4.4.1-.1.2-.1.4-.1z" class="st3"/><path d="M346 73.2v21.4c0 .3.3.5.6.5s.6-.2.6-.5V73.2c0-.3-.3-.5-.6-.5-.3-.1-.6.2-.6.5zM393.9 18.2c-.4 0-.7.2-.7.5s.3.5.7.5h28.4c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-28.4zM393.1 49.6c-.4 0-.7.2-.7.5s.3.5.7.5h28c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-28zM382.5 24.8c-.3.1-.4.4-.2.7l9.9 9.8c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.9-9.8c-.2-.2-.7-.3-1-.1zM411.2 24.8c-.3.1-.4.4-.2.7l9.9 9.8c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.9-9.8c-.3-.2-.7-.3-1-.1z" class="st3"/><path d="M382.5 40.1c-.3.1-.4.4-.2.7l9.9 9.6c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.9-9.6c-.2-.2-.7-.2-1-.1zM411.2 40.1c-.3.1-.4.4-.2.7l9.7 9.5c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.7-9.5c-.3-.2-.7-.2-1-.1zM421.5 18.5l-10.7 5.9c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l10.7-5.9c.3-.2.3-.5.1-.7-.2-.2-.7-.3-1-.1zM393.3 18.3l-10.9 6.4c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l10.9-6.4c.3-.2.3-.5.1-.7-.2-.2-.7-.2-1-.1z" class="st3"/><path d="m421.1 34.7-9.9 5.4c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l9.9-5.4c.3-.2.3-.5.1-.7-.2-.2-.7-.2-1-.1zM392.3 34.6l-9.9 5.4c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l9.9-5.4c.3-.2.3-.5.1-.7-.2-.2-.7-.2-1-.1zM384.1 24.5c-.4 0-.7.2-.7.5s.3.5.7.5h27.4c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-27.4z" class="st3"/><path d="M394.9 34.6c-.4 0-.7.2-.7.5s.3.5.7.5h25.3c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-25.3zM384.3 40c-.4 0-.7.2-.7.5s.3.5.7.5h27c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-27z" class="st3"/></svg>
        </a>
        <div class=" items-center hidden lg:flex ml-auto">
            <nav>
                <ul class="flex space-x-3">
                    <!-- check of url contain -->
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= !preg_match("/(wat|hoe|waar|casestudy|nieuws)/i",$URL) ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/">Wie</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "wat") || str_contains($URL, "casestudy") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/wat/cat-alle/">Wat</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "hoe") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/hoe">Hoe</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "waar") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/waar">Waar</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "nieuws") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/nieuws">Nieuws</a></li>
                </ul>
            </nav>
            <div class="bg-[#C4C4C4] w-[1px] h-5 mx-3"></div>
            <a class="flex items-center font-poppins font-light text-20 leading-20 text-[#424B4F] hover:text-[#F18700]" href="tel:<?php the_field('telefoon', 'option');?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" xml:space="preserve" style="enable-background:new 0 0 24 25" viewBox="0 0 24 25"><path d="M11.8 6.6c.1.2.1.3 0 .5s-.2.3-.3.4l-1.5.7c-.1.1-.2.2-.2.3-.1 1.6.3 3.3 1 4.7.7 1.5 1.8 2.7 3.2 3.7.1.1.3.1.4 0l1.5-.7c.2-.1.3-.1.5 0s.3.2.4.3L18 19c.1.2.1.3 0 .5s-.2.3-.3.4l-1.3.7c-.3.2-.7.3-1.1.2-.4 0-.8-.1-1.1-.3-2.4-1.5-4.3-3.6-5.6-6.1C7.5 11.8 7 9 7.2 6.3c0-.4.2-.7.4-1.1.2-.3.5-.6.9-.7l1.3-.6c.2-.1.3-.1.5 0s.3.2.4.3l1.1 2.4zM9.3 3 8 3.7c-.5.2-.9.6-1.2 1-.3.4-.5.9-.5 1.4-.3 3 .3 5.9 1.6 8.6 1.4 2.6 3.4 4.9 5.9 6.4l.6.3c.4.1.8.2 1.3.2.4 0 .8-.1 1.2-.3l1.3-.6c.4-.2.6-.5.8-.9.1-.4.1-.8-.1-1.2l-1.2-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8-.1-1.2.1l-1.3.6c-1.1-.8-2-1.9-2.6-3.1-.6-1.2-1-2.6-1-3.9l1.3-.7c.4-.2.7-.5.8-.9.1-.4.1-.8-.1-1.2l-1.3-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8 0-1.2.1z" style="fill:#f18700"/></svg>
                <span><?php the_field('telefoon', 'option');?></span>
            </a>
            <div class="ml-7 space-x-[15px]">
                <!-- <button class="h-3 w-3 p-[5px] rounded-full border-[1px] border-[#C4C4C4] hover:bg-[#c4c4c44a] hover:scale-105 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 24 25" viewBox="0 0 24 25"><path d="M16.9 17.2c-.1 0-.1.1 0 0l-.1.1c-1.3 1.3-3.2 2.1-5.2 2.1-4.1 0-7.4-3.3-7.4-7.4s3.3-7.4 7.4-7.4c4.1 0 7.4 3.3 7.4 7.4 0 2.1-.8 3.9-2.1 5.2m3.8 3.3-2.9-2.9c1.3-1.5 2.1-3.4 2.1-5.6 0-4.6-3.8-8.4-8.4-8.4S3.2 7.4 3.2 12c0 4.6 3.8 8.4 8.4 8.4 2.1 0 4.1-.8 5.6-2.1l2.9 2.9c.2.2.5.2.7 0 .1-.2.1-.5-.1-.7" style="fill:#f18700"/><path d="M16.9 17.2c-.1 0-.1.1 0 0l-.1.1c-1.3 1.3-3.2 2.1-5.2 2.1-4.1 0-7.4-3.3-7.4-7.4s3.3-7.4 7.4-7.4c4.1 0 7.4 3.3 7.4 7.4 0 2.1-.8 3.9-2.1 5.2zm3.8 3.3-2.9-2.9c1.3-1.5 2.1-3.4 2.1-5.6 0-4.6-3.8-8.4-8.4-8.4S3.2 7.4 3.2 12c0 4.6 3.8 8.4 8.4 8.4 2.1 0 4.1-.8 5.6-2.1l2.9 2.9c.2.2.5.2.7 0 .1-.2.1-.5-.1-.7z" style="fill:none;stroke:#f18700;stroke-width:5.000000e-02;stroke-miterlimit:10"/></svg>
                </button> -->
                <div id="weglot_here"></div>
                <a href="<?php the_field('hcm-portal', 'option');?>" target="_blank">
                    <div class="h-3 w-3 p-[5px] rounded-full border-[1px] border-[#C4C4C4] hover:bg-[#c4c4c44a] hover:scale-105 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="Laag_1" x="0" y="0" style="enable-background:new 0 0 24 25" version="1.1" viewBox="0 0 24 25"><path  d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8m0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11" fill="#F5A742" /><path d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8zm0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11z" fill="#F5A742"  /><path fill="#F5A742" d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" class="st0"/><path fill="#F5A742"   d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" /></svg>
                    </div>
                </a>
            </div>
        </div>
        <div>
            <div class="flex space-x-[10px] lg:hidden w-full h-full">
                    <a href="<?php the_field('hcm-portal', 'option');?>" target="_blank">
                        <div class="lg:hidden  h-3 w-3 p-[5px] rounded-full border-[1px] border-[#C4C4C4] hover:bg-[#c4c4c44a] hover:scale-105 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="Laag_1" x="0" y="0" style="enable-background:new 0 0 24 25" version="1.1" viewBox="0 0 24 25"><path  d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8m0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11" fill="#F5A742" /><path d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8zm0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11z" fill="#F5A742"  /><path fill="#F5A742" d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" class="st0"/><path fill="#F5A742"   d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" /></svg>
                        </div>
                    </a>
                    <button class="lg:hidden button-hamburger h-3 w-3 bg-[#F18A06] rounded-full flex justify-center items-center">
                        <svg class="mb-[5px]" id="Group_2" data-name="Group 2" xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 29 14">
                            <rect id="Rectangle" width="29" height="2" fill="#fff"/>
                            <rect id="Rectangle_Copy" data-name="Rectangle Copy" width="29" height="2" transform="translate(0 10)" fill="#fff"/>
                            <rect id="Rectangle_Copy_2" data-name="Rectangle Copy 2" width="29" height="2" transform="translate(0 20)" fill="#fff"/>
                        </svg>
                        <svg id="Group" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22">
                            <rect id="Rectangle" width="29.168" height="1.945" transform="translate(1.375 0) rotate(45)" fill="#fff"/>
                            <rect id="Rectangle_Copy_3" data-name="Rectangle Copy 3" width="29.168" height="1.945" transform="translate(0 20.625) rotate(-45)" fill="#fff"/>
                        </svg>
                    </button>
            </div>
        </div>
    </div>
</header>
<div class="menu w-sreen bg-white flex flex-col w-full z-50 bg-hero bottom-0 lg:hidden">
    <div class="relative h-full">
        <section class="h-[7px] w-full bg-orange"></section>
        <div class="pt-[35px] px-2 h-[95%]">
            <div class="container flex flex-col justify-between h-full">
                <div class="flex flex-col">
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/">Wie</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/wat/cat-alle/">Wat</a>
                    <a  class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/hoe">Hoe</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/waar">Waar</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/nieuws">Nieuws</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/leveringsvoorwaarden">Leveringsvoorwaarden</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway pt-1" href="/privacy">Privacy & Voorwaarden</a>
                    <a class="pt-5 flex" href="tel:<?php the_field('telefoon', 'option');?>">
                        <svg class="w-2 h-auto" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 24 25" viewBox="0 0 24 25">
                            <path d="M11.8 6.6c.1.2.1.3 0 .5s-.2.3-.3.4l-1.5.7c-.1.1-.2.2-.2.3-.1 1.6.3 3.3 1 4.7.7 1.5 1.8 2.7 3.2 3.7.1.1.3.1.4 0l1.5-.7c.2-.1.3-.1.5 0s.3.2.4.3L18 19c.1.2.1.3 0 .5s-.2.3-.3.4l-1.3.7c-.3.2-.7.3-1.1.2-.4 0-.8-.1-1.1-.3-2.4-1.5-4.3-3.6-5.6-6.1C7.5 11.8 7 9 7.2 6.3c0-.4.2-.7.4-1.1.2-.3.5-.6.9-.7l1.3-.6c.2-.1.3-.1.5 0s.3.2.4.3l1.1 2.4zM9.3 3 8 3.7c-.5.2-.9.6-1.2 1-.3.4-.5.9-.5 1.4-.3 3 .3 5.9 1.6 8.6 1.4 2.6 3.4 4.9 5.9 6.4l.6.3c.4.1.8.2 1.3.2.4 0 .8-.1 1.2-.3l1.3-.6c.4-.2.6-.5.8-.9.1-.4.1-.8-.1-1.2l-1.2-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8-.1-1.2.1l-1.3.6c-1.1-.8-2-1.9-2.6-3.1-.6-1.2-1-2.6-1-3.9l1.3-.7c.4-.2.7-.5.8-.9.1-.4.1-.8-.1-1.2l-1.3-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8 0-1.2.1z" style="fill:#f18700"/>
                        </svg>
                        <span class="text-25 leading-35 font-bold text-white font-raleway ml-[5px]"><?php the_field('telefoon', 'option');?></span>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="<?php the_field('linkedin', 'option');?>" target="_blank"><svg class="h-[40px]" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 40.1 40.1" viewBox="0 0 40.1 40.1"><path d="M5.7 3.5h28.7c1.1.2 1.9.8 2.2 1.8.3.9.1 2.3.1 3.6v21.9c0 1.2.1 2.5 0 3.6-.1 1.3-1.1 2-2.2 2.2H5.7c-1.3-.2-2-.9-2.2-2.2V5.7c.2-1.3.9-2 2.2-2.2m2.2 7.4c0 2.2 2.5 3.7 4.4 2.5.4-.2.7-.6.9-.9 1.3-2.2-.5-4.5-2.6-4.4-1.5 0-2.7 1.2-2.7 2.8M30.1 17c-1-1-2.6-1.6-4.6-1.5-2.1.1-3.5 1.2-4.4 2.5v-2.1h-4.8v15.8h5v-5.5c0-2-.2-3.9.5-5.1.5-1 2.3-1.8 3.7-1 1.6.9 1.3 3.7 1.3 6.3v5.3h5c-.4-5 1-11.9-1.7-14.7M8.3 16v15.7h5V15.9H8.4c-.1 0-.1.1-.1.1" style="fill:#fff"/></svg></a>
                    <a href="https://www.censo.nl/" target="_blank" class="h-[35px] ml-[15px]">
                        <svg width="auto" height="100%" viewBox="0 0 324.8 536.209105" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Censo-logo" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Group" transform="translate(0.5712, 86.8091)">
                                        <path d="M213.628799,212.4 C215.228799,210.8 216.628799,209.2 218.028799,207.5 C243.028799,176.7 238.328799,131.4 207.528799,106.4 C194.228799,95.6 178.228799,90.4 162.328799,90.4 C141.428799,90.4 120.628799,99.5 106.428799,116.9 C105.028799,118.6 103.728799,120.4 102.528799,122.3 C111.928799,124.9 121.128799,128.3 130.028799,132.4 C138.628799,123.1 150.428799,118.3 162.328799,118.3 C172.028799,118.3 181.828799,121.5 189.928799,128.1 C207.928799,142.8 211.328799,168.9 198.028799,187.6 C203.928799,195.4 209.128799,203.7 213.628799,212.4 Z" id="Path"></path>
                                        <path d="M250.628799,161.8 L250.628799,161.9 C250.628799,161.9 250.628799,161.9 250.628799,161.8 L250.628799,161.8 Z" id="Path"></path>
                                        <path d="M238.228799,249.9 C239.928799,249.9 241.828799,249.3 243.728799,247.8 C260.828799,231.5 273.128799,210.2 278.128799,186.2 C278.128799,186 278.228799,185.9 278.228799,185.7 C278.528799,184.1 278.828799,182.5 279.128799,180.9 C279.228799,180.5 279.228799,180.1 279.328799,179.7 C279.528799,178.3 279.728799,176.9 279.828799,175.5 C279.928799,174.9 279.928799,174.3 280.028799,173.7 C280.128799,172.5 280.228799,171.3 280.328799,170.1 C280.428799,169.3 280.428799,168.5 280.528799,167.7 C280.528799,166.7 280.628799,165.8 280.628799,164.8 C280.628799,163.8 280.728799,162.7 280.628799,161.7 C280.628799,159.5 280.528799,157.2 280.428799,155 C280.328799,154 280.228799,153 280.228799,152 C280.128799,150.6 279.928799,149.3 279.828799,147.9 C279.728799,146.8 279.628799,145.8 279.428799,144.7 C279.128799,142.6 278.728799,140.6 278.328799,138.5 C278.128799,137.6 277.928799,136.6 277.728799,135.7 C277.328799,134.2 277.028799,132.6 276.628799,131.1 L276.628799,131.1 C276.528799,130.6 276.428799,130.1 276.228799,129.6 L276.228799,129.6 C269.828799,107.1 256.628799,86.2 237.128799,70.3 C215.228799,52.5 188.828799,43.9 162.628799,43.9 C128.128799,43.9 94.0287987,58.8 70.6287987,87.6 C63.6287987,96.2 57.9287987,105.7 53.6287987,115.8 C54.1287987,115.8 54.6287987,115.8 55.1287987,115.8 C65.4287987,115.8 75.6287987,116.7 85.7287987,118.4 C88.1287987,114.2 90.8287987,110.2 93.8287987,106.5 C111.228799,85 136.828799,73.8 162.528799,73.8 C182.128799,73.8 201.828799,80.3 218.128799,93.5 C235.528799,107.6 246.128799,127.1 249.528799,147.7 L249.528799,147.7 C249.928799,150 250.228799,152.3 250.428799,154.6 C250.428799,154.8 250.428799,155.1 250.528799,155.3 C250.728799,157.5 250.828799,159.7 250.828799,161.9 L250.828799,161.9 L250.828799,162 L250.828799,161.9 C250.828799,162.2 250.828799,162.6 250.828799,162.9 C250.828799,162.9 250.828799,162.9 250.828799,162.9 C250.828799,164.1 250.828799,165.2 250.728799,166.4 C250.728799,166.6 250.728799,166.8 250.728799,167.1 C250.628799,168.4 250.528799,169.7 250.428799,171 L250.428799,171.3 C248.728799,187.8 242.428799,204 231.228799,217.9 C228.328799,221.4 225.128799,224.7 221.728799,227.8 C223.928799,235.4 229.828799,249.9 238.228799,249.9 Z" id="Path"></path>
                                        <path d="M162.328799,134.8 C156.328799,134.8 150.428799,136.7 145.528799,140.5 C146.028799,140.8 146.628799,141.2 147.128799,141.5 C148.028799,142 148.928799,142.6 149.728799,143.1 C150.828799,143.8 151.928799,144.5 153.128799,145.2 C155.128799,146.5 157.128799,147.9 159.128799,149.3 C159.728799,149.8 160.428799,150.2 161.028799,150.7 C163.228799,152.3 165.328799,153.9 167.428799,155.7 C169.528799,157.4 171.628799,159.2 173.628799,161 C174.228799,161.5 174.828799,162.1 175.428799,162.6 C177.228799,164.2 179.028799,165.9 180.728799,167.6 C181.628799,168.5 182.528799,169.5 183.528799,170.4 C184.228799,171.1 184.928799,171.9 185.628799,172.6 C186.028799,173.1 186.528799,173.5 186.928799,174 C192.328799,162.8 189.628799,149 179.528799,140.9 C174.528799,136.8 168.428799,134.8 162.328799,134.8 Z" id="Path"></path>
                                        <path d="M264.528799,36.2 C234.528799,11.8 198.328799,-4.26325641e-14 162.428799,-4.26325641e-14 C115.228799,-4.26325641e-14 68.3287987,20.5 36.3287987,59.9 C21.3287987,78.4 10.6287987,100 4.82879874,122.9 C5.32879874,122.7 5.82879874,122.6 6.42879874,122.5 C7.02879874,122.3 7.62879874,122.2 8.12879874,122 C9.72879874,121.6 11.2287987,121.2 12.8287987,120.8 C13.1287987,120.7 13.4287987,120.6 13.7287987,120.6 C15.5287987,120.2 17.4287987,119.8 19.2287987,119.4 C24.5287987,118.3 29.8287987,117.5 35.1287987,116.9 C40.2287987,102.5 47.7287987,89.1 57.4287987,77.2 C84.0287987,44.4 123.028799,27.4 162.328799,27.4 C192.228799,27.4 222.228799,37.2 247.228799,57.5 C304.028799,103.6 313.028799,190.5 266.928799,247.2 C261.728799,253.6 256.028799,259.4 249.828799,264.7 C249.528799,264.9 249.128799,265.2 248.828799,265.4 C247.928799,266 246.928799,266.6 246.028799,267.2 C242.828799,269.2 239.128799,270.8 235.328799,271 C234.828799,271 234.428799,271 234.028799,271 C228.328799,271 223.928799,268.7 220.228799,265.1 C214.128799,259.2 210.428799,249.8 207.528799,242.2 C207.028799,241 206.628799,239.8 206.128799,238.6 C200.028799,223.1 192.728799,208.8 182.528799,195.4 C168.828799,177.5 151.528799,162.3 131.628799,151.6 C93.2287987,131 45.9287987,126.6 4.12879874,140.3 C3.32879874,140.6 2.52879874,140.8 1.72879874,141.1 L1.22879874,141.3 C-7.77120126,212.8 33.4287987,284.1 99.8287987,311.8 C183.228799,346.6 284.228799,302.1 314.828799,217.1 C337.928799,153.1 317.228799,79 264.528799,36.2 Z" id="Path"></path>
                                    </g>
                                    <g id="Group" transform="translate(0, -0)">
                                        <path d="M316,9.00910487 C303.2,-2.69089513 283.6,-2.69089513 270.8,9.00910487 C259,21.5091049 259,41.1091049 270.8,53.6091049 C283.6,65.3091049 303.2,65.3091049 316,53.6091049 C327.7,41.1091049 327.7,21.6091049 316,9.00910487 M310.4,31.4091049 C309.9,41.0091049 301.5,48.2091049 291.9,47.3091049 C283.2,46.5091049 276.4,38.9091049 276.6,30.1091049 C276.8,20.4091049 284.9,12.9091049 294.5,13.5091049 C303.4,14.0091049 310.4,21.3091049 310.5,30.2091049 C310.4,30.6091049 310.4,31.0091049 310.4,31.4091049" id="Path_4770"></path>
                                        <path d="M44.2,39.0091049 L59,39.0091049 C58.4,41.7091049 57.6,44.3091049 56.4,46.8091049 C55.1,49.5091049 53.4,52.0091049 51.4,54.3091049 C49.1,56.9091049 46.1,59.0091049 42.8,60.3091049 C39,61.9091049 34.9,62.7091049 30.7,62.6091049 C22.5,62.9091049 14.5,59.7091049 8.7,53.8091049 C-2.9,41.0091049 -2.9,21.6091049 8.7,8.80910487 C14.5,2.90910487 22.5,-0.19089513 30.7,0.00910487046 C34.8,-0.0908951295 39,0.70910487 42.8,2.30910487 C46.1,3.60910487 49,5.70910487 51.4,8.30910487 C53.4,10.5091049 55.1,13.0091049 56.4,15.6091049 C57.6,18.0091049 58.5,20.5091049 59,23.0091049 L44.2,23.0091049 C42.4,17.1091049 36.8,13.2091049 30.6,13.6091049 C26.3,13.5091049 22.1,15.3091049 19.3,18.6091049 C13.2,26.0091049 13.2,36.7091049 19.3,44.1091049 C22.2,47.3091049 26.3,49.1091049 30.6,49.1091049 C37,49.4091049 42.7,45.2091049 44.2,39.0091049" id="Path_4771"></path>
                                        <path d="M111,43.7091049 L126.3,43.7091049 C125.8,45.5091049 125,47.2091049 124,48.7091049 C122.6,50.9091049 121,53.0091049 119.2,54.8091049 C116.8,57.3091049 113.9,59.2091049 110.6,60.4091049 C106.8,61.9091049 102.7,62.6091049 98.6,62.6091049 C90.4,62.9091049 82.4,59.7091049 76.6,53.8091049 C65,41.0091049 65,21.6091049 76.6,8.80910487 C82.4,2.90910487 90.4,-0.19089513 98.6,0.00910487046 C106.5,-0.19089513 114.1,3.00910487 119.5,8.70910487 C125.2,14.4091049 128.2,22.1091049 128.1,30.1091049 C128.1,30.8091049 128,32.2091049 127.7,34.3091049 L127.5,36.0091049 L82.7,36.0091049 C83.2,40.0091049 85.1,43.6091049 88,46.3091049 C90.9,48.9091049 94.7,50.3091049 98.6,50.2091049 C101.4,50.3091049 104.2,49.6091049 106.6,48.1091049 C108.5,47.1091049 110,45.6091049 111,43.7091049 M82.7,26.0091049 L113.4,26.0091049 C112.9,22.3091049 111.1,18.9091049 108.5,16.2091049 C105.9,13.7091049 102.3,12.3091049 98.6,12.4091049 C94.8,12.2091049 91,13.6091049 88.1,16.1091049 C85.4,18.8091049 83.5,22.2091049 82.7,26.0091049 L82.7,26.0091049 L82.7,26.0091049 Z" id="Path_4772"></path>
                                        <path d="M201.7,43.1091049 L215.8,43.1091049 C216,45.2091049 217.1,47.1091049 218.9,48.3091049 C221.4,50.1091049 224.5,51.0091049 227.6,50.8091049 C235.1,50.8091049 238.8,48.6091049 238.8,44.3091049 C238.9,42.6091049 238.2,41.0091049 237,39.9091049 C235.1,38.6091049 232.8,37.8091049 230.5,37.6091049 L221.1,36.1091049 C208.1,34.0091049 201.6,28.3091049 201.6,19.0091049 C201.6,13.7091049 204.1,8.80910487 208.3,5.60910487 C213.7,1.70910487 220.3,-0.29089513 226.9,0.10910487 C233.7,-0.29089513 240.4,2.00910487 245.5,6.60910487 C249.4,9.80910487 251.9,14.5091049 252.2,19.6091049 L238.1,19.6091049 C238,17.4091049 236.8,15.5091049 235,14.3091049 C230.1,11.3091049 224,11.2091049 219,14.0091049 C217.3,15.1091049 216.3,17.0091049 216.2,19.0091049 C216.2,21.9091049 219,23.8091049 224.5,24.6091049 L234.5,26.1091049 C247.1,28.0091049 253.4,34.1091049 253.4,44.4091049 C253.4,49.6091049 251,54.5091049 246.7,57.5091049 C242.3,61.0091049 235.8,62.7091049 227.4,62.7091049 C223.6,62.8091049 219.8,62.2091049 216.1,61.0091049 C213.4,60.2091049 210.8,58.8091049 208.6,57.0091049 C205.5,54.2091049 203.2,50.7091049 202,46.7091049 C201.9,45.5091049 201.7,44.3091049 201.7,43.1091049" id="Path_4773"></path>
                                        <path d="M192.6,27.3091049 C192.4,12.0091049 179.8,-0.29089513 164.5,0.00910487046 C149.5,0.20910487 137.4,12.3091049 137.2,27.3091049 L137.2,61.3091049 L152,61.3091049 L152,27.8091049 L152,27.8091049 C152,19.3091049 160.2,12.7091049 169.1,15.5091049 C174.4,17.2091049 177.9,22.2091049 177.9,27.8091049 L177.9,27.8091049 L177.9,27.8091049 L177.9,61.4091049 L192.7,61.4091049 L192.6,27.3091049 L192.6,27.3091049 Z" id="Path_4791"></path>
                                    </g>
                                    <rect id="Rectangle" x="0.7" y="440.709105" width="324.1" height="19.7"></rect>
                                    <g id="Group" transform="translate(1.2, 492.4091)">
                                        <path d="M14.7,43.1 L0,43.1 L0,0 L15,0 C19.3,0 23,0.9 26.1,2.6 C29.2,4.3 31.6,6.8 33.2,10 C34.9,13.2 35.7,17.1 35.7,21.5 C35.7,26 34.9,29.8 33.2,33.1 C31.5,36.3 29.1,38.8 26,40.5 C22.8,42.3 19.1,43.1 14.7,43.1 Z M7.9,36.4 L14.3,36.4 C17.3,36.4 19.8,35.9 21.8,34.7 C23.8,33.6 25.3,32 26.3,29.8 C27.3,27.6 27.8,24.9 27.8,21.6 C27.8,18.3 27.3,15.6 26.3,13.4 C25.3,11.2 23.8,9.6 21.8,8.5 C19.8,7.4 17.4,6.9 14.4,6.9 L7.7,6.9 L7.7,36.4 L7.9,36.4 Z" id="Shape"></path>
                                        <path d="M66.3,29.6 L66.3,10.9 L73.9,10.9 L73.9,43.2 L66.5,43.2 L66.5,37.5 L66.2,37.5 C65.5,39.3 64.3,40.8 62.6,41.9 C60.9,43.1 58.9,43.6 56.4,43.6 C54.3,43.6 52.4,43.1 50.8,42.2 C49.2,41.3 47.9,39.9 47,38.1 C46.1,36.3 45.6,34.1 45.6,31.5 L45.6,10.9 L53.2,10.9 L53.2,30.2 C53.2,32.2 53.8,33.9 54.9,35.1 C56,36.3 57.5,36.9 59.3,36.9 C60.4,36.9 61.5,36.6 62.6,36.1 C63.7,35.6 64.5,34.7 65.2,33.6 C65.9,32.5 66.3,31.2 66.3,29.6 Z" id="Path"></path>
                                        <path d="M105.3,29.6 L105.3,10.9 L112.9,10.9 L112.9,43.2 L105.5,43.2 L105.5,37.5 L105.2,37.5 C104.5,39.3 103.3,40.8 101.6,41.9 C99.9,43.1 97.9,43.6 95.4,43.6 C93.3,43.6 91.4,43.1 89.8,42.2 C88.2,41.3 86.9,39.9 86,38.1 C85.1,36.3 84.6,34.1 84.6,31.5 L84.6,10.9 L92.2,10.9 L92.2,30.2 C92.2,32.2 92.8,33.9 93.9,35.1 C95,36.3 96.5,36.9 98.3,36.9 C99.4,36.9 100.5,36.6 101.6,36.1 C102.7,35.6 103.5,34.7 104.2,33.6 C104.9,32.6 105.3,31.2 105.3,29.6 Z" id="Path"></path>
                                        <path d="M123.6,43.1 L123.6,10.8 L131,10.8 L131,16.2 L131.3,16.2 C131.9,14.3 132.9,12.9 134.3,11.9 C135.7,10.9 137.4,10.4 139.2,10.4 C139.6,10.4 140.1,10.4 140.6,10.5 C141.1,10.5 141.6,10.6 141.9,10.7 L141.9,17.7 C141.6,17.6 141.1,17.5 140.4,17.4 C139.7,17.3 139,17.3 138.4,17.3 C137,17.3 135.8,17.6 134.7,18.2 C133.6,18.8 132.7,19.6 132.1,20.7 C131.5,21.8 131.2,23 131.2,24.3 L131.2,43.3 L123.6,43.3 L123.6,43.1 Z" id="Path"></path>
                                        <polygon id="Path" points="149.6 43.1 149.6 38.3 166.3 17.4 166.3 17.2 150.1 17.2 150.1 10.9 175.6 10.9 175.6 16.1 159.7 36.6 159.7 36.9 176.2 36.9 176.2 43.2 149.6 43.2"></polygon>
                                        <path d="M195.6,43.8 C193.5,43.8 191.7,43.4 190.1,42.7 C188.5,42 187.2,40.9 186.2,39.4 C185.2,37.9 184.8,36.2 184.8,34.1 C184.8,32.3 185.1,30.8 185.8,29.6 C186.5,28.4 187.4,27.5 188.6,26.7 C189.8,26 191.1,25.4 192.6,25.1 C194.1,24.7 195.6,24.5 197.2,24.3 C199.1,24.1 200.6,23.9 201.8,23.8 C203,23.6 203.8,23.4 204.4,23 C204.9,22.7 205.2,22.1 205.2,21.4 L205.2,21.2 C205.2,19.6 204.7,18.4 203.8,17.5 C202.9,16.6 201.5,16.2 199.7,16.2 C197.8,16.2 196.3,16.6 195.3,17.4 C194.2,18.2 193.5,19.2 193.1,20.3 L186,19.3 C186.6,17.3 187.5,15.7 188.8,14.4 C190.1,13.1 191.7,12.1 193.5,11.4 C195.4,10.7 197.4,10.4 199.7,10.4 C201.3,10.4 202.8,10.6 204.4,10.9 C205.9,11.3 207.4,11.9 208.6,12.7 C209.9,13.5 210.9,14.7 211.7,16.1 C212.5,17.5 212.9,19.3 212.9,21.5 L212.9,43.1 L205.6,43.1 L205.6,38.7 L205.3,38.7 C204.8,39.6 204.2,40.4 203.3,41.2 C202.5,42 201.4,42.6 200.2,43.1 C198.8,43.6 197.3,43.8 195.6,43.8 Z M197.6,38.2 C199.1,38.2 200.5,37.9 201.6,37.3 C202.7,36.7 203.6,35.9 204.2,34.9 C204.8,33.9 205.1,32.8 205.1,31.6 L205.1,27.8 C204.9,28 204.5,28.2 203.9,28.3 C203.3,28.5 202.7,28.6 202,28.7 C201.3,28.8 200.6,28.9 199.9,29 C199.2,29.1 198.6,29.2 198.1,29.3 C197,29.5 195.9,29.7 195,30.1 C194.1,30.5 193.4,30.9 192.9,31.6 C192.4,32.2 192.1,33 192.1,34 C192.1,35.4 192.6,36.5 193.6,37.2 C194.7,37.8 196,38.2 197.6,38.2 Z" id="Shape"></path>
                                        <path d="M232.6,43.8 C230.5,43.8 228.7,43.4 227.1,42.7 C225.5,42 224.2,40.9 223.2,39.4 C222.2,37.9 221.8,36.2 221.8,34.1 C221.8,32.3 222.1,30.8 222.8,29.6 C223.5,28.4 224.4,27.5 225.6,26.7 C226.8,26 228.1,25.4 229.6,25.1 C231.1,24.7 232.6,24.5 234.2,24.3 C236.1,24.1 237.6,23.9 238.8,23.8 C240,23.6 240.8,23.4 241.4,23 C241.9,22.7 242.2,22.1 242.2,21.4 L242.2,21.2 C242.2,19.6 241.7,18.4 240.8,17.5 C239.9,16.6 238.5,16.2 236.7,16.2 C234.8,16.2 233.3,16.6 232.3,17.4 C231.2,18.2 230.5,19.2 230.1,20.3 L223,19.3 C223.6,17.3 224.5,15.7 225.8,14.4 C227.1,13.1 228.7,12.1 230.5,11.4 C232.4,10.7 234.4,10.4 236.7,10.4 C238.3,10.4 239.8,10.6 241.4,10.9 C242.9,11.3 244.4,11.9 245.6,12.7 C246.9,13.5 247.9,14.7 248.7,16.1 C249.5,17.5 249.9,19.3 249.9,21.5 L249.9,43.1 L242.6,43.1 L242.6,38.7 L242.3,38.7 C241.8,39.6 241.2,40.4 240.3,41.2 C239.5,42 238.4,42.6 237.2,43.1 C235.7,43.6 234.3,43.8 232.6,43.8 Z M234.6,38.2 C236.1,38.2 237.5,37.9 238.6,37.3 C239.7,36.7 240.6,35.9 241.2,34.9 C241.8,33.9 242.1,32.8 242.1,31.6 L242.1,27.8 C241.9,28 241.5,28.2 240.9,28.3 C240.3,28.5 239.7,28.6 239,28.7 C238.3,28.8 237.6,28.9 236.9,29 C236.2,29.1 235.6,29.2 235.1,29.3 C234,29.5 232.9,29.7 232,30.1 C231.1,30.5 230.4,30.9 229.9,31.6 C229.4,32.2 229.1,33 229.1,34 C229.1,35.4 229.6,36.5 230.6,37.2 C231.7,37.8 233,38.2 234.6,38.2 Z" id="Shape"></path>
                                        <path d="M260.3,43.1 L260.3,10.8 L267.6,10.8 L267.6,16.3 L268,16.3 C268.7,14.4 269.8,13 271.4,12 C273,11 274.8,10.4 277,10.4 C279.2,10.4 281,10.9 282.6,12 C284.1,13.1 285.2,14.5 285.8,16.3 L286.1,16.3 C286.8,14.5 288,13.1 289.7,12 C291.4,10.9 293.4,10.4 295.8,10.4 C298.8,10.4 301.2,11.3 303.1,13.2 C305,15.1 305.9,17.8 305.9,21.4 L305.9,43.1 L298.2,43.1 L298.2,22.6 C298.2,20.6 297.7,19.1 296.6,18.2 C295.5,17.3 294.2,16.8 292.7,16.8 C290.9,16.8 289.4,17.4 288.4,18.5 C287.4,19.6 286.8,21.1 286.8,22.9 L286.8,43 L279.3,43 L279.3,22.2 C279.3,20.5 278.8,19.2 277.8,18.2 C276.8,17.2 275.5,16.7 273.9,16.7 C272.8,16.7 271.8,17 270.9,17.5 C270,18.1 269.3,18.8 268.7,19.8 C268.2,20.8 267.9,22 267.9,23.3 L267.9,42.9 L260.3,42.9 L260.3,43.1 Z" id="Path"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>

                </div>

            </div>


        </div>
        <section class="h-[7px] w-full bg-orange absolute bottom-0 left-0 right-0"></section>
    </div>
</div>


<div class="h-10"></div>