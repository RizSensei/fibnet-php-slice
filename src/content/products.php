<?php
include './_partials/_page_header.php';
$label = " Products";
renderPageHeaderSection($label);
?>

<div class="w-full h-full py-10 px-5 sm:px-10 lg:px-20 2xl:px-32">
    <div
        id="resources-list-section"
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
        <script>
            const resources = [{
                    label: "Ocean Cable",
                    link: "#",
                },
                {
                    label: "Tiahan Fiber Optics Cable",
                    link: "#",
                },
                {
                    label: "Fiber Optics Solutions",
                    link: "#",
                }
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