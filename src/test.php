<!DOCTYPE html>
<html lang="en">
<?php
include 'path.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwind output file -->
    <link rel="stylesheet" href="<?= $path ?>/assets/css/output.css" />
    <!-- tailwind output file -->

    <link rel="stylesheet" href="<?= $path ?>/assets/css/style.css" />
</head>

<body>
    <div class="max-w-lg w-full rounded-lg shadow-2xl">
        <div class="p-5">
            <div class="flex justify-between items-center">
                <div class="flex gap-1 items-center">
                    <div><img src="<?= $path ?>/assets/images/encode-logo.png" alt="" class="h-16" /></div>
                </div>
                <span
                    id="close-popup"
                    class="hover:text-red-500 cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
            <div class="mt-1 grid grid-cols-2 gap-1">
                <div class="h-28 w-full">
                    <img src="<?= $path ?>/assets/images/popup/popup-image-1.png" alt="" class="h-full w-full object-cover">
                </div>
                <div class="h-28 w-full">
                    <img src="<?= $path ?>/assets/images/popup/popup-image-2.png" alt="" class="h-full w-full object-cover">
                </div>
            </div>
            <div class="mt-1 grid grid-cols-3 gap-1">
                <div class="col-span-1">
                    <img src="<?= $path ?>/assets/images/svg/Delivery address-amico.svg" alt="" class="h-full w-full object-cover">
                </div>
                <div class="col-span-2 flex flex-col justify-center">
                    <div class="bg-primary text-white px-5 py-2">
                        <h1 class="text-lg uppercase font-semibold">Free Home Collection</h1>
                    </div>
                    <div class="mt-2">
                        <div class="rounded-xl shadow-xl overflow-hidden w-full">
                            <div class="p-2 flex gap-2 items-center bg-[#2AAEDF]">
                                <h6 class="font-extrabold text-white">For Home Sample Collection Call</h6>
                            </div>
                            <div class="p-2 flex gap-2 items-center">
                                <div class="h-max w-max  text-primary p-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 32 32"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </div>
                                <h5 class="font-bold text-neutral-900">9801318012 | 9801318013</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-3 flex justify-between items-center bg-[#2AAEDF]">

        </div>
    </div>
</body>

</html>