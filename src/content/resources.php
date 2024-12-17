<?php
include './_partials/_page_header.php';
$label = "Resources";
renderPageHeaderSection($label);
?>

<div class="w-full h-full py-10 px-5 sm:px-10 lg:px-20 2xl:px-32">
  <p class="text-sm mt-2 text-dark-blue">
    We help to build Rural Broadband and bridging rural divides.
    Therefore, we provide our FPAC Fiber Optics cable as an investment
    as a partnership to Fiber broadband projects mostly in rural areas.
  </p>
  <div
    id="resources-list-section"
    class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
    <script>
      const resources = [{
          label: "USDA RECONNECT PROGRAM",
          href: "#",
        },
        {
          label: "BROADBAND WORLDNEWS",
          href: "#",
        },
        {
          label: "THE RURAL BROADBAND ASSOCIATION",
          href: "#",
        },
        {
          label: "BROADBAND COMMUNITIES",
          href: "#",
        },
      ];
      const resourcesList = resources
        .map(
          (resource, idx) => `
            <div class="resource-card group relative rounded-2xl bg-white shadow-2xl hover:shadow-3xl p-10 flex    flex-col items-start">
                <div class="z-10 flex flex-col items-start">
                    <h2 class="mt-4 pl-4 text-xl text-dark-blue font-semibold border-4 border-solid border-y-0 border-r-0">${resource.label}</h2>
                    <a href="${resource.href}" class="cursor-pointer mt-4 bg-transparent flex gap-2 border-none items-center text-gray-800 group-hover:text-dark-blue transform ease-in-out duration-150">
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
      document.getElementById("resources-list-section").innerHTML =
        resourcesList;
    </script>
  </div>
</div>