<?php
function renderServices() {
    // Define the services array
    $services = [
        [
            "icon" => "/fibnet/public/images/Products/Managed Services.png",
            "label" => "Managed Services",
            "description" => "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
            "href" => "/fibnet/src/managed-service.php"
        ],
        [
            "icon" => "/fibnet/public/images/Products/Ocean Cable.png",
            "label" => "Broadband For all",
            "description" => "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
            "href" => "/fibnet/src/broadband.php"
        ],
        [
            "icon" => "/fibnet/public/images/Products/ICT Solutions.png",
            "label" => "ICT Solutions",
            "description" => "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
            "href" => "/fibnet/src/ict-solutions.php"
        ],
        [
            "icon" => "/fibnet/public/images/Products/Infrastructure Development.png",
            "label" => "Infrastructure Development",
            "description" => "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
            "href" => "/fibnet/src/infrastructure-development.php"
        ],
    ];

    // Generate the HTML for the services section
    $output = '  <div class="mt-10">
    <div class="flex flex-col items-center">
      <h1 class="mt-5 text-3xl font-bold">
        Other <span class="text-dark-blue">Services</span>
      </h1>
    </div>
    <div id="services" class="service-container mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">';
    foreach ($services as $index => $service) {
        $output .= '
        <div class="service-card group relative rounded-2xl bg-white shadow-2xl hover:shadow-3xl p-10 flex flex-col items-start">
            <div class="z-10 flex flex-col items-start">
                <img src="' . htmlspecialchars($service['icon']) . '" alt="" class="h-[80px] aspect-square object-contain" />
                <h2 class="mt-4 pl-4 text-xl text-dark-blue font-semibold border-4 border-solid border-y-0 border-r-0">' . htmlspecialchars($service['label']) . '</h2>
                <p class="mt-4 text-xs text-gray-700 line-clamp-3">' . htmlspecialchars($service['description']) . '</p>
                <a href="' . $service['href'] . '" class="cursor-pointer mt-4 bg-transparent flex gap-2 border-none items-center text-gray-800 group-hover:text-dark-blue transform ease-in-out duration-150">
                    <h5 class="font-medium">Read More</h5>
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>
            <div class="z-0 absolute top-20 right-8 group-hover:right-10 transform ease-in-out duration-150">
                <h1 class="text-7xl text-gray-100">0' . ($index + 1) . '</h1>
            </div>
        </div>';
    }
    $output .= '</div></div>';
    return $output;
}
?>
