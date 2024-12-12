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
          link: "#",
        },
        {
          label: "BROADBAND WORLDNEWS",
          link: "#",
        },
        {
          label: "THE RURAL BROADBAND ASSOCIATION",
          link: "#",
        },
        {
          label: "BROADBAND COMMUNITIES",
          link: "#",
        },
      ];
      const resourcesList = resources
        .map(
          (resource, idx) => `
                       <a href="${resource.link}" class="px-3 py-3 bg-gray-200 hover:bg-gray-300 transform ease-in-out duration-150 text-dark-blue">
                             <h3 class="text-xl font-bold text-center">
                                 ${resource.label}
                                 </h3>
                            </a>
                    `
        )
        .join("");
      document.getElementById("resources-list-section").innerHTML =
        resourcesList;
    </script>
  </div>
</div>