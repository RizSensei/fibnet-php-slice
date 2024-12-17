<?php
include './_partials/_page_header.php';
$label = " Products";
renderPageHeaderSection($label);
?>

<div class="w-full h-full py-10 px-5 sm:px-10 lg:px-20 2xl:px-32">
    <div
        id="products-list-section"
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
        <script>
            const products = [{
                    label: "Ocean Cable",
                    link: "/fibnet/src/ocean-cable.php",
                },
                {
                    label: "Tiahan Fiber Optics Cable",
                    link: "/fibnet/src/tiahan-fiber-optics-cable.php",
                },
                {
                    label: "Fiber Optics Solutions",
                    link: "/fibnet/src/fiber-optics-solutions.php",
                }
            ];
            const productsList = products
                .map(
                    (product, idx) => `
            <div class="product-card group relative rounded-2xl bg-white shadow-2xl hover:shadow-3xl p-10 flex flex-col items-start">
                <div class="z-10 flex flex-col items-start">
                    <h2 class="mt-4 pl-4 text-xl text-dark-blue font-semibold border-4 border-solid border-y-0 border-r-0">${product.label}</h2>
                    <p class="mt-4 text-xs text-gray-700 line-clamp-3">
                       As of our Fiber Optics cable that we provide is a well welded-steel-tube armored with Corning glass that can be laid
                    </p>
                    <a href="${product.href}" class="cursor-pointer mt-4 bg-transparent flex gap-2 border-none items-center text-gray-800 group-hover:text-dark-blue transform ease-in-out duration-150">
                        <h5 class="font-medium">Read More</h5>
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
                <div class="z-0 absolute top-10 right-8 group-hover:right-10 transform ease-in-out duration-150">
                    <h1 class="text-7xl text-gray-100">0${idx + 1}</h1>
                </div>
            </div>
                    `
                )
                .join("");
            document.getElementById("products-list-section").innerHTML =
                productsList;
        </script>
    </div>
</div>