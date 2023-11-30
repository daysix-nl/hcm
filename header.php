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
<header id="site-header" class="h-10 bg-white flex items-center relative z-10">
    <div class="container flex items-center justify-between">
        <a href="/">
            <svg class="w-[150px] md:w-[275x]" xmlns="http://www.w3.org/2000/svg" width="180px"  xml:space="preserve" id="Layer_1" x="0" y="0" style="enable-background:new 0 0 439.4 155.9" version="1.1" viewBox="0 0 439.4 155.9"><style>.st1{fill:#006fb9;stroke:#006fb9;stroke-width:5.000000e-02}.st2{fill:#1d1d1b}.st3{fill:#fff}</style><path d="M438.5 88c0 9.4-7.6 17-17 17h-96.6c-9.4 0-17-7.6-17-17V23.7c0-9.4 7.6-17 17-17h96.6c9.4 0 17 7.6 17 17V88z" style="fill:#f18700;stroke:#f18700;stroke-width:5.000000e-02"/><path d="M2 17.1C2 10.7 6.2 6.4 12.8 6.4s10.7 4.3 10.7 10.7v26.7h39V17.1c0-6.4 4.2-10.7 10.7-10.7 6.5 0 10.7 4.3 10.7 10.7v76.2c0 6.4-4.2 10.7-10.7 10.7-6.6 0-10.7-4.3-10.7-10.7V61.9h-39v31.4c0 6.4-4.2 10.7-10.7 10.7S2 99.8 2 93.4V17.1zM142.5 5.9c24.6 0 38.1 15.5 38.1 24.6 0 6-3.3 9.7-9.7 9.7-12.4 0-8.8-17-28.4-17-13.5 0-24.6 11.7-24.6 32.1 0 17.2 6.8 32.1 25.4 32.1 16.9 0 16.5-18.1 26.9-18.1 5.2 0 10.5 3 10.5 8.3 0 13.6-16.5 27.1-37.3 27.1-29.5 0-46.9-16.9-46.9-49.4-.1-26.6 15.6-49.4 46-49.4zM193.9 17c0-8.6 5.9-10.6 11.7-10.6h6.3c6.7 0 9.8 2.6 12.1 9.8l18.7 60.5h.3l18.5-60.5c2.2-7.2 5.4-9.8 12.1-9.8h6c5.8 0 11.7 2 11.7 10.6v76.6c0 5.4-2.6 10.5-9.6 10.5-6.9 0-9.6-5.1-9.6-10.5V35.2h-.3l-20 62.6c-1.4 4.5-4.7 6.3-9.2 6.3-4.5 0-7.7-1.8-9.2-6.3l-20-62.6h-.4v58.4c0 5.4-2.6 10.5-9.6 10.5-6.9 0-9.6-5.1-9.6-10.5V17z" class="st1"/><path d="M16.9 143.9h-3v-11H5.4v11h-3v-22.8h3v9.3h8.5v-9.3h3v22.8zM23.2 131.9c0-3.9 1.8-5.6 6.2-5.6 5.6 0 5.6 3.1 5.6 4.9v9.6c0 .7 0 1.4.9 1.4.4 0 .6-.1.7-.2v1.9c-.2 0-1 .2-1.7.2-1.1 0-2.5 0-2.6-2.2h-.1c-.9 1.5-2.7 2.5-4.5 2.5-3.5 0-5-1.9-5-5 0-2.4 1.1-4.1 3.5-4.7l3.9-1.1c2.1-.6 2.1-1.2 2.1-2.6 0-1.6-1-2.5-3-2.5-3.2 0-3.2 2.8-3.2 3.4v.2h-2.8zm9 2.7c-1.1 1.1-3.6 1.3-4.9 2-.9.5-1.4 1.2-1.4 2.7 0 1.7.7 2.9 2.6 2.9 1.9 0 3.7-1.5 3.7-3.3v-4.3zM41.8 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-17.1zM72.9 143.9h-2.8v-2.1H70c-.4 1.3-2 2.6-4 2.6-4.4 0-6-3.6-6-9 0-3.6.6-9 5.8-9 1.7 0 3.4.9 4.1 2.4h.1v-7.6h2.9v22.7zm-6.5-1.8c3.2 0 3.7-2.8 3.7-6.7 0-3.3-.6-6.7-3.7-6.7-2.7 0-3.4 2.6-3.4 6.7 0 4 .7 6.7 3.4 6.7zM79.7 121.1h2.9v22.8h-2.9v-22.8zM89.6 121.1h2.9v3.1h-2.9v-3.1zm0 5.7h2.9V144h-2.9v-17.2zM99.3 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-17.1zM130.3 142.8c0 5.1-2.6 7-6.3 7-1.1 0-5.6 0-6.1-4.3h2.9c.1 1.6 1.5 2.2 3 2.2 3.7 0 3.6-2.7 3.6-3.8v-2.2h-.1c-.6 1.4-2.3 2.3-4.2 2.3-5.4 0-5.7-6.3-5.7-8.6 0-4.6 1.3-9 6-9 2 0 3.6 1.3 4 2.6h.1v-2.2h2.8v16zm-9.8-7.5c0 2.8.4 6.3 3.4 6.3 3.1 0 3.8-2.8 3.8-6.3 0-3.3-.6-6.7-3.7-6.7-2.8 0-3.5 2.6-3.5 6.7zM164.6 136.1c-.3 4.3-2.1 8.3-7.5 8.3-7 0-7.9-6.1-7.9-11.9 0-5.8 1.1-11.9 7.9-11.9 5 0 7.2 2.6 7.3 7.1h-3.2c-.1-2.6-1-4.8-4.1-4.8-4.2 0-4.8 4.3-4.8 9.6s.6 9.6 4.8 9.6c3.7 0 4.2-3.2 4.3-6h3.2zM175.9 126.3c5.4 0 6.7 4.2 6.7 9s-1.3 9-6.7 9-6.7-4.2-6.7-9 1.4-9 6.7-9zm3.6 9c0-3.7-.6-6.9-3.7-6.9-2.9 0-3.6 3.2-3.6 6.9s.6 6.9 3.6 6.9c3.1 0 3.7-3.2 3.7-6.9zM187.9 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 2.1 0 3.4.8 4 2.7.8-1.5 2.5-2.7 4.4-2.7 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.5-3.5-1.3 0-3.5.8-3.5 3.5v11.8h-2.9v-11.8c0-1.3-.1-3.5-2.5-3.5-1.3 0-3.5.8-3.5 3.5v11.8h-2.9v-17.1zM214.8 126.8h2.8v2.1h.1c.4-1.3 2-2.6 4-2.6 4.4 0 6.1 3.6 6.1 8.7 0 3.9-1.2 9.3-6.1 9.3-1.7 0-3.2-.9-3.9-2.4h-.1v7.6h-2.9v-22.7zm6.5 15.3c2.7 0 3.4-2.6 3.4-7 0-3.8-.7-6.4-3.4-6.4-3.2 0-3.7 2.8-3.7 6.7-.1 3.3.6 6.7 3.7 6.7zM233.2 131.9c0-3.9 1.8-5.6 6.2-5.6 5.6 0 5.6 3.1 5.6 4.9v9.6c0 .7 0 1.4.9 1.4.4 0 .6-.1.7-.2v1.9c-.2 0-1 .2-1.7.2-1.1 0-2.5 0-2.6-2.2h-.1c-.9 1.5-2.7 2.5-4.5 2.5-3.5 0-5-1.9-5-5 0-2.4 1.1-4.1 3.5-4.7l3.9-1.1c2.1-.6 2.1-1.2 2.1-2.6 0-1.6-1-2.5-3-2.5-3.2 0-3.2 2.8-3.2 3.4v.2h-2.8zm8.9 2.7c-1.1 1.1-3.6 1.3-4.9 2-.9.5-1.4 1.2-1.4 2.7 0 1.7.7 2.9 2.6 2.9 1.9 0 3.7-1.5 3.7-3.3v-4.3zM251.8 126.8h2.8v2h.1c.8-1.6 2.7-2.5 4.5-2.5 4.9 0 4.9 3.4 4.9 5.4v12.2h-2.9v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-17.1zM268.7 126.8h3.2l3.7 13.8h.1l3.2-13.8h3.2l-5.4 18.3c-.7 2.4-1.5 4.5-4.9 4.5-1.1 0-1.6-.1-2.1-.1v-2.1c.4.1 1 .1 1.7.1 1.3 0 1.9-.7 2.3-1.7l.6-1.5-5.6-17.5zM300 121.1h5.1l4.9 18.1h.1l4.9-18.1h5.1v22.8h-3v-20h-.1l-5.5 20h-3l-5.5-20h-.1v20h-3v-22.8zM327.2 124.1h2.9V121h-2.9v3.1zm0 19.8h2.9v-17.2h-2.9v17.2zM340 145.6c0 2.8-1.3 4.2-4.4 4.2-.4 0-.9-.1-1.3-.1v-2.3c.3 0 .7.1 1.1.1 1.8 0 1.8-1.3 1.8-2.9v-17.9h2.9v18.9zm0-21.5h-2.9V121h2.9v3.1zM358.1 143.9h-2.8v-2.1h-.1c-.4 1.3-2 2.6-4 2.6-4.4 0-6-3.6-6-9 0-3.6.6-9 5.8-9 1.7 0 3.4.9 4.1 2.4h.1v-7.6h2.9v22.7zm-6.4-1.8c3.2 0 3.7-2.8 3.7-6.7 0-3.3-.6-6.7-3.7-6.7-2.7 0-3.4 2.6-3.4 6.7 0 4 .7 6.7 3.4 6.7zM364.8 126.8h2.9v2.6h.1c.8-1.6 1.9-3 4-3 .6 0 1 .1 1.3.2v2.6c-.3 0-.6-.1-1.6-.1-1.5 0-3.8 1.2-3.8 4.1V144h-2.9v-17.2zM380.2 135.7c0 2.6 0 6.6 3.6 6.6 2.8 0 3.1-2.7 3.1-4h2.9c0 1.8-1.2 6.1-6.2 6.1-4.5 0-6.4-2.9-6.4-8.8 0-4.3.9-9.2 6.6-9.2 5.7 0 6.2 4.6 6.2 8.3v1.1h-9.8zm6.7-2.2v-.9c0-1.9-.7-4.2-3.2-4.2-3 0-3.4 3.5-3.4 4.5v.6h6.6zM404.8 132c0-1.7-.7-3.6-2.9-3.6-1.8 0-3.6.8-3.6 7.1 0 2.2 0 6.7 3.5 6.7 2.5 0 3-2.4 3-4.3h2.9c0 2.7-1.5 6.4-6.1 6.4-4.5 0-6.4-2.9-6.4-8.8 0-4.3.9-9.2 6.6-9.2 5 0 5.9 3.7 5.9 5.7h-2.9zM413.6 121.1h2.9v7.6h.1c.8-1.4 2.8-2.4 4.5-2.4 4.8 0 4.8 3.4 4.8 5.4v12.2H423v-11.8c0-1.3-.1-3.5-2.7-3.5-1.6 0-3.7 1-3.7 3.5v11.8h-2.9v-22.8zM433.3 121.8h2.9v5h3.2v2.1h-3.2v11c0 1.4.4 1.9 1.9 1.9.6 0 1-.1 1.3-.1v2.2c-.4.1-1.1.2-2.3.2-3 0-3.7-1.2-3.7-3.4v-11.8h-2.7v-2.1h2.7v-5z" class="st2"/><path d="M381.7 86.9c-.3 4.7 3.9 8.6 9.5 8.9 5.6.3 10.2-3.1 10.4-7.8.3-4.7-3.9-8.6-9.5-8.9-5.5-.3-10.1 3.1-10.4 7.8zm.9 0c.2-3.8 4.5-6.8 9.5-6.5 4.9.3 8.9 3.7 8.7 7.5s-4.5 6.8-9.5 6.5c-4.9-.2-8.9-3.7-8.7-7.5z" class="st3"/><path d="M409.4 61.7c-.1 0-.1 0-.1.1l-24.9 19.9c-.2.2-.3.6-.2.9.1.3.4.5.6.3 0 0 24.7-19.7 24.8-19.8.4-.1 7.5-1.6 10.2 2.2.8 1 1.1 2.4 1 4.1-.5.5-21 21.4-21 21.4-.1.1-.2.3-.2.5 0 .1-.1.4-.1.6.1.3.3.7.5.5l21.5-22.1c.1-.1.2-.3.2-.5.1-2.3-.3-4.1-1.3-5.5-3.1-4.5-10.6-2.7-11-2.6zM327.2 20.5c-.3 0-.6.3-.6.6v26.4c0 .3.3.6.6.6h39.3c.3 0 .6-.3.6-.6V21.1c0-.3-.3-.6-.6-.6h-39.3zm38.6 1.2v25.2h-38V21.7h38z" class="st3"/><path d="M328.8 22.7c-.2.3-.1.6.1.8L346.3 37c.2.1.5.1.7 0l18-13.4c.2-.2.3-.6.1-.8-.2-.2-.6-.3-.8-.1 0 0-17 12.6-17.7 13.1-.7-.5-17-13.2-17-13.2-.3-.2-.6-.1-.8.1zM346 60.8 329 66c-.2.1-.4.3-.4.5s.2.3.4.4c-.3 0-.6.2-.6.5v23c0 .2.2.4.4.5l17.8 5.7c.2.1.3 0 .5 0l17.5-6.5c.2-.1.4-.3.4-.5l-.2-24.1c0-.2-.1-.3-.3-.4-.2-.1-.4-.1-.6-.1 0 0-16.6 5.3-17 5.4-.4-.1-12.9-3.3-15.7-4 2.7-.8 14.8-4.5 15.1-4.6.4.1 16.5 3.4 16.5 3.4.3.1.7-.1.8-.4.1-.3-.1-.6-.5-.6l-16.7-3.5c-.2.1-.3.1-.4.1zm1.1 10.7s14.8-4.7 16.3-5.2c0 1.4.2 22.4.2 23-.7.3-16.5 6.1-16.9 6.3-.5-.2-16.4-5.3-17.1-5.5V67.5c0-.1-.1-.3-.2-.3.8.2 17.3 4.4 17.3 4.4.1-.1.2-.1.4-.1z" class="st3"/><path d="M346 73.2v21.4c0 .3.3.5.6.5s.6-.2.6-.5V73.2c0-.3-.3-.5-.6-.5-.3-.1-.6.2-.6.5zM393.9 18.2c-.4 0-.7.2-.7.5s.3.5.7.5h28.4c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-28.4zM393.1 49.6c-.4 0-.7.2-.7.5s.3.5.7.5h28c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-28zM382.5 24.8c-.3.1-.4.4-.2.7l9.9 9.8c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.9-9.8c-.2-.2-.7-.3-1-.1zM411.2 24.8c-.3.1-.4.4-.2.7l9.9 9.8c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.9-9.8c-.3-.2-.7-.3-1-.1z" class="st3"/><path d="M382.5 40.1c-.3.1-.4.4-.2.7l9.9 9.6c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.9-9.6c-.2-.2-.7-.2-1-.1zM411.2 40.1c-.3.1-.4.4-.2.7l9.7 9.5c.2.2.7.3 1 .1.3-.1.4-.4.2-.7l-9.7-9.5c-.3-.2-.7-.2-1-.1zM421.5 18.5l-10.7 5.9c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l10.7-5.9c.3-.2.3-.5.1-.7-.2-.2-.7-.3-1-.1zM393.3 18.3l-10.9 6.4c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l10.9-6.4c.3-.2.3-.5.1-.7-.2-.2-.7-.2-1-.1z" class="st3"/><path d="m421.1 34.7-9.9 5.4c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l9.9-5.4c.3-.2.3-.5.1-.7-.2-.2-.7-.2-1-.1zM392.3 34.6l-9.9 5.4c-.3.2-.3.5-.1.7.3.2.7.2 1 .1l9.9-5.4c.3-.2.3-.5.1-.7-.2-.2-.7-.2-1-.1zM384.1 24.5c-.4 0-.7.2-.7.5s.3.5.7.5h27.4c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-27.4z" class="st3"/><path d="M394.9 34.6c-.4 0-.7.2-.7.5s.3.5.7.5h25.3c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-25.3zM384.3 40c-.4 0-.7.2-.7.5s.3.5.7.5h27c.4 0 .7-.2.7-.5s-.3-.5-.7-.5h-27z" class="st3"/></svg>
        </a>
        <div class=" items-center hidden lg:flex ml-auto">
            <nav>
                <ul class="flex space-x-3">
                    <!-- check of url contain -->
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= !preg_match("/(wat|hoe|waar)/i",$URL) ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/">Wie</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "wat") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/wat/cat-alle/">Wat</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "hoe") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/hoe">Hoe</a></li>
                    <li class=" hover:text-[#F18A06] hover:underline-offset-2 hover:underline transition-all duration-300 font-poppins font-light text-20 leading-20 <?= str_contains($URL, "waar") ? "text-[#F18A06] underline-offset-2 underline" : "text-[#424B4F]" ?>"><a href="/waar">Waar</a></li>
                </ul>
            </nav>
            <div class="bg-[#C4C4C4] w-[1px] h-5 mx-3"></div>
            <a class="flex items-center font-poppins font-light text-20 leading-20 text-[#424B4F]" href="tel:029723057">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" xml:space="preserve" style="enable-background:new 0 0 24 25" viewBox="0 0 24 25"><path d="M11.8 6.6c.1.2.1.3 0 .5s-.2.3-.3.4l-1.5.7c-.1.1-.2.2-.2.3-.1 1.6.3 3.3 1 4.7.7 1.5 1.8 2.7 3.2 3.7.1.1.3.1.4 0l1.5-.7c.2-.1.3-.1.5 0s.3.2.4.3L18 19c.1.2.1.3 0 .5s-.2.3-.3.4l-1.3.7c-.3.2-.7.3-1.1.2-.4 0-.8-.1-1.1-.3-2.4-1.5-4.3-3.6-5.6-6.1C7.5 11.8 7 9 7.2 6.3c0-.4.2-.7.4-1.1.2-.3.5-.6.9-.7l1.3-.6c.2-.1.3-.1.5 0s.3.2.4.3l1.1 2.4zM9.3 3 8 3.7c-.5.2-.9.6-1.2 1-.3.4-.5.9-.5 1.4-.3 3 .3 5.9 1.6 8.6 1.4 2.6 3.4 4.9 5.9 6.4l.6.3c.4.1.8.2 1.3.2.4 0 .8-.1 1.2-.3l1.3-.6c.4-.2.6-.5.8-.9.1-.4.1-.8-.1-1.2l-1.2-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8-.1-1.2.1l-1.3.6c-1.1-.8-2-1.9-2.6-3.1-.6-1.2-1-2.6-1-3.9l1.3-.7c.4-.2.7-.5.8-.9.1-.4.1-.8-.1-1.2l-1.3-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8 0-1.2.1z" style="fill:#f18700"/></svg>
                <span>+31 297 230 5700</span>
            </a>
            <div class="ml-7 space-x-[15px]">
                <button class="h-3 w-3 p-[5px] rounded-full border-[1px] border-[#C4C4C4] hover:bg-[#c4c4c44a] hover:scale-105 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 24 25" viewBox="0 0 24 25"><path d="M16.9 17.2c-.1 0-.1.1 0 0l-.1.1c-1.3 1.3-3.2 2.1-5.2 2.1-4.1 0-7.4-3.3-7.4-7.4s3.3-7.4 7.4-7.4c4.1 0 7.4 3.3 7.4 7.4 0 2.1-.8 3.9-2.1 5.2m3.8 3.3-2.9-2.9c1.3-1.5 2.1-3.4 2.1-5.6 0-4.6-3.8-8.4-8.4-8.4S3.2 7.4 3.2 12c0 4.6 3.8 8.4 8.4 8.4 2.1 0 4.1-.8 5.6-2.1l2.9 2.9c.2.2.5.2.7 0 .1-.2.1-.5-.1-.7" style="fill:#f18700"/><path d="M16.9 17.2c-.1 0-.1.1 0 0l-.1.1c-1.3 1.3-3.2 2.1-5.2 2.1-4.1 0-7.4-3.3-7.4-7.4s3.3-7.4 7.4-7.4c4.1 0 7.4 3.3 7.4 7.4 0 2.1-.8 3.9-2.1 5.2zm3.8 3.3-2.9-2.9c1.3-1.5 2.1-3.4 2.1-5.6 0-4.6-3.8-8.4-8.4-8.4S3.2 7.4 3.2 12c0 4.6 3.8 8.4 8.4 8.4 2.1 0 4.1-.8 5.6-2.1l2.9 2.9c.2.2.5.2.7 0 .1-.2.1-.5-.1-.7z" style="fill:none;stroke:#f18700;stroke-width:5.000000e-02;stroke-miterlimit:10"/></svg>
                </button>
                <button class="h-3 w-3 p-[5px] rounded-full border-[1px] border-[#C4C4C4] hover:bg-[#c4c4c44a] hover:scale-105 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="Laag_1" x="0" y="0" style="enable-background:new 0 0 24 25" version="1.1" viewBox="0 0 24 25"><path  d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8m0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11" fill="#F5A742" /><path d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8zm0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11z" fill="#F5A742"  /><path fill="#F5A742" d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" class="st0"/><path fill="#F5A742"   d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" /></svg>
                </button>
            </div>
        </div>
        <div>
            <div class="flex space-x-[10px] lg:hidden w-full h-full">
                    <button class="lg:hidden  h-3 w-3 p-[5px] rounded-full border-[1px] border-[#C4C4C4] hover:bg-[#c4c4c44a] hover:scale-105 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="Laag_1" x="0" y="0" style="enable-background:new 0 0 24 25" version="1.1" viewBox="0 0 24 25"><path  d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8m0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11" fill="#F5A742" /><path d="M12 2.8c2 0 3.7 1.7 3.7 3.7 0 2.1-1.6 3.7-3.7 3.7S8.3 8.7 8.3 6.6 10 2.8 12 2.8zm0 8.2c2.4 0 4.3-2 4.3-4.4S14.4 2.2 12 2.2s-4.3 2-4.3 4.4S9.6 11 12 11z" fill="#F5A742"  /><path fill="#F5A742" d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" class="st0"/><path fill="#F5A742"   d="M19 20.3v2.3H5v-2.5c0-3.9 3.1-7.1 7-7.1s7 3.2 7 7.3c0-.1 0-.1 0 0 0-.1 0-.1 0 0zm.7-.1c0-4.3-3.4-7.8-7.7-7.8s-7.7 3.5-7.7 7.8V23c0 .2.1.3.3.3h14.6c.2 0 .3-.2.3-.3v-2.8h.2z" /></svg>
                        </button>
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
<div class="menu w-sreen bg-white  flex flex-col w-full z-50 bg-hero bottom-0">
    <div class="relative h-full">
        <section class="h-[7px] w-full bg-orange"></section>
        <div class="pt-[35px] px-2 h-[95%]">
            <div class="container flex flex-col justify-between h-full">
                <div class="flex flex-col">
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/">Wie</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/wat/cat-alle/">Wat</a>
                    <a  class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/hoe">Hoe</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/waar">Waar</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/waar">Waar</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway border-b-white/20 border-b-[0.5px] py-1" href="/">Leveringsvoorwaarden</a>
                    <a class="text-25 leading-35 font-light text-white font-raleway pt-1" href="/">Privacy & Voorwaarden</a>
                    <a class="pt-5 flex" href="mailto:0297230570">
                        <svg class="w-2 h-auto" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 24 25" viewBox="0 0 24 25">
                            <path d="M11.8 6.6c.1.2.1.3 0 .5s-.2.3-.3.4l-1.5.7c-.1.1-.2.2-.2.3-.1 1.6.3 3.3 1 4.7.7 1.5 1.8 2.7 3.2 3.7.1.1.3.1.4 0l1.5-.7c.2-.1.3-.1.5 0s.3.2.4.3L18 19c.1.2.1.3 0 .5s-.2.3-.3.4l-1.3.7c-.3.2-.7.3-1.1.2-.4 0-.8-.1-1.1-.3-2.4-1.5-4.3-3.6-5.6-6.1C7.5 11.8 7 9 7.2 6.3c0-.4.2-.7.4-1.1.2-.3.5-.6.9-.7l1.3-.6c.2-.1.3-.1.5 0s.3.2.4.3l1.1 2.4zM9.3 3 8 3.7c-.5.2-.9.6-1.2 1-.3.4-.5.9-.5 1.4-.3 3 .3 5.9 1.6 8.6 1.4 2.6 3.4 4.9 5.9 6.4l.6.3c.4.1.8.2 1.3.2.4 0 .8-.1 1.2-.3l1.3-.6c.4-.2.6-.5.8-.9.1-.4.1-.8-.1-1.2l-1.2-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8-.1-1.2.1l-1.3.6c-1.1-.8-2-1.9-2.6-3.1-.6-1.2-1-2.6-1-3.9l1.3-.7c.4-.2.7-.5.8-.9.1-.4.1-.8-.1-1.2l-1.3-2.5c-.2-.4-.5-.6-.9-.8-.4-.1-.8 0-1.2.1z" style="fill:#f18700"/>
                        </svg>
                        <span class="text-25 leading-35 font-bold text-white font-raleway ml-[5px]">0297-230570</span>
                    </a>
                </div>
                <div class="flex space-x-2">
                        <a href="">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 40.1 40.1" viewBox="0 0 40.1 40.1">
                                <path d="M5.7 3.5h28.7c1.1.2 1.9.8 2.2 1.8.3.9.1 2.3.1 3.6v21.9c0 1.2.1 2.5 0 3.6-.1 1.3-1.1 2-2.2 2.2H5.7c-1.3-.2-2-.9-2.2-2.2V5.7c.2-1.3.9-2 2.2-2.2m2.2 7.4c0 2.2 2.5 3.7 4.4 2.5.4-.2.7-.6.9-.9 1.3-2.2-.5-4.5-2.6-4.4-1.5 0-2.7 1.2-2.7 2.8M30.1 17c-1-1-2.6-1.6-4.6-1.5-2.1.1-3.5 1.2-4.4 2.5v-2.1h-4.8v15.8h5v-5.5c0-2-.2-3.9.5-5.1.5-1 2.3-1.8 3.7-1 1.6.9 1.3 3.7 1.3 6.3v5.3h5c-.4-5 1-11.9-1.7-14.7M8.3 16v15.7h5V15.9H8.4c-.1 0-.1.1-.1.1" style="fill:#fff"/>
                            </svg>
                        </a>
                </div>
            </div>


        </div>
        <section class="h-[7px] w-full bg-orange absolute bottom-0 left-0 right-0"></section>
    </div>
</div>


