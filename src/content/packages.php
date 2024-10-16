<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Package');
?>
<!-- page banner  -->

<div class="px-5 py-5 sm:px-10 xl:px-24 2xl:px-44">
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
        <div
            class="col-span-2 lg:col-span-1 flex flex-col sm:flex-row lg:flex-col gap-5 order-2 lg:order-1">
            <div class="bg-white w-full">
                <h3
                    class="font-medium px-5 py-5 border border-solid border-x-0 border-t-0 border-primary">
                    Categories
                </h3>
                <div id="category-container" class="flex flex-col">
                    <script>
                        const categories = [1, 1, 1]
                            .map(
                                (category) =>
                                `
                      <button class="text-primary px-5 py-3 flex items-center gap-5 w-full bg-white hover:bg-neutral-100 border-bottom">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>
                            <h3 class="text-neutral-700">Category Option 1</h3>
                      </button>
                                  `
                            )
                            .join("");
                        document.getElementById("category-container").innerHTML =
                            categories;
                    </script>
                </div>
            </div>

            <div class="bg-white w-full">
                <h3
                    class="font-medium px-5 py-5 border border-solid border-x-0 border-t-0 border-primary">
                    Opening Hours
                </h3>
                <div class="px-5 p-5 flex items-center text-primary gap-5">
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
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-neutral-800">
                        Sun - Fri 07:00 AM - 07:00PM
                    </span>
                </div>
            </div>
        </div>
        <div
            class="col-span-2 bg-white rounded-md py-5 px-5 sm:px-10 order-1 lg:order-2">
            <div class="pb-5 border-bottom flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-2">
                    <select
                        class="form-select block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                        <option disabled selected>Default Sorting</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <form action="#" class="relative text-sm flex-grow">
                    <input
                        type="search"
                        name=""
                        id=""
                        class="w-full border border-neutral-200 rounded-md outline-none pl-10"
                        placeholder="Search for packages..." />
                    <span
                        class="absolute top-1/2 left-2 -translate-y-1/2 text-neutral-500">
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
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </span>
                </form>
            </div>
            <div
                id="package-container"
                class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-5">
                <script>
                    const packages = [1, 1, 1, 1]
                        .map(
                            () => `
             <div class="border border-solid border-neutral-300 shadow-lg rounded-md">
              <div class="grid grid-cols-3 gap-1 overflow-hidden">
                <div class="col-span-2 flex flex-col gap-2 p-5 z-20">
                  <img
                  src="<?= $path ?>/assets/images/encode-logo.png"
                  alt=""
                  class="h-8 w-20"
                />
                <h3 class="text-neutral-800 font-semibold">BASIC HEALTH
                  PACKAGE</h3>
                  <h5 class=""><span class="text-neutral-700 line-through font-semibold">Rs 5300</span>&nbsp;&nbsp;<span class="text-primary font-semibold">Rs 3499</span></h5>
                  <h5 class="font-semibold text-neutral-700">48 TESTS INCLUDED</h5>
                </div>
                <div class="relative z-10">
                  <img src="<?= $path ?>/assets/images/package-img-1.png" alt="" class="w-full h-full object-cover">
                  <div class="-z-10 absolute -bottom-10 -right-5">
                    <div class="h-48 w-48 rounded-full bg-[#b4f3c3]"></div>
                  </div>
                </div>
            </div>
          </div>
                    `
                        )
                        .join("");
                    document.getElementById("package-container").innerHTML =
                        packages;
                </script>
            </div>
        </div>
    </div>
</div>