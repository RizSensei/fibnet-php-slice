<?php

include 'path.php';

// Reusable component function
function pageBannerComponent($label)
{
    global $path; 

    return '
    <div class="relative w-full h-[150px]">
        <img src="' . $path . '/assets/images/page_banner.webp" alt="Page Banner" class="w-full h-full object-cover">

        <div class="absolute inset-0 w-full h-full">
            <div class="px-12 h-full flex flex-col justify-center text-white font-semibold text-3xl">
                ' . htmlspecialchars($label) . '
            </div>
        </div>
    </div>
    ';
}

