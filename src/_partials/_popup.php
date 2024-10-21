<div id="popup-card" data-aos="fade-up" class="bg-white max-w-sm md:max-w-lg w-full rounded-lg shadow-2xl overflow-hidden">
    <div class="p-5">
        <div class="flex justify-between items-center">
            <div class="flex gap-1 items-center">
                <div><img src="<?= $path ?>/assets/images/encode-logo.png" alt="" class="h-12" /></div>
            </div>
            <span
                id="popup-card-close"
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
                    <h1 class="text-base uppercase font-semibold">Free Home Collection</h1>
                </div>
                <div class="mt-2">
                    <div class="rounded-xl shadow-xl overflow-hidden w-full">
                        <div class="p-2 flex gap-2 items-center bg-[#2AAEDF]">
                            <h6 class="font-extrabold text-white">For Home Sample Collection Call</h6>
                        </div>
                        <div class="p-2 flex gap-2 items-center">
                            <div class="text-primary text-sm"><i class="fa-solid fa-phone"></i></div>
                            <h5 class="font-bold text-neutral-900">9801318012 | 9801318013</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-1 flex justify-between items-center bg-[#2AAEDF]">
        <div class="p-2 flex gap-2 items-center">
            <div class="text-xs text-white"><i class="fa-solid fa-phone"></i></div>
            <h5 class="text-xs font-bold text-white">015910971/2</h5>
        </div>

        <div class="p-2 flex gap-2 items-center">
            <div class="text-xs text-white"><i class="fa-solid fa-location-dot"></i></div>
            <h5 class="text-xs font-bold text-white">3rd FLoor, Indira Bhawan, Thadodhunga, Lalitpur</h5>
        </div>
    </div>
</div>

<script>
    AOS.init({
        once: true,
        mirror: true
    });
</script>