<?php
include './_partials/_breadcrumb_header.php';
$parent_label = "Product";
$parent_label_href = "/fibnet/src/products.html";
$label = "Fiber Optics Solutions";
renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label);
?>

<section class="w-full px-5 sm:px-10 lg:px-20 2xl:px-32 py-10">
    <h2 class="text-dark-blue">Choosing the right cable blowing machine</h2>
    <p class="mt-2 text-base">Choosing the right cable blowing machine for a specific project is important to ensure efficient and safe cable installation. Here are some factors to consider when choosing a cable blowing machine:</p>
    <div class="my-5 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <?php
        $cableBlowingMachineCriteria = [
            [
                "title" => "Cable Type and Size",
                "description" => "Different cable blowing machines are designed to work with specific types and sizes of cables. Make sure to choose a machine that is compatible with the cables you will be using."
            ],
            [
                "title" => "Blowing Distance",
                "description" => "Consider the distance the cables will need to be blown, and choose a machine that is capable of reaching that distance."
            ],
            [
                "title" => "Air Flow Rate",
                "description" => "The air flow rate of the machine should be sufficient to blow the cables through the conduit."
            ],
            [
                "title" => "Conduit Size",
                "description" => "Different machines have different conduit size compatibility, so make sure to choose a machine that can work with the size of the conduit you will be using."
            ],
            [
                "title" => "Durability and Maintenance",
                "description" => "Look for a machine that is made of high-quality materials and that is easy to maintain."
            ],
            [
                "title" => "Safety Features",
                "description" => "Look for a machine with safety features like emergency stop, and that meets international standards and compliance regulations."
            ],
            [
                "title" => "Technical Support and Warranty",
                "description" => "Consider the level of technical support and warranty offered by the manufacturer."
            ],
            [
                "title" => "Cost",
                "description" => "Compare the cost of different machines and choose one that fits your budget but also fits your needs."
            ],
        ];

        foreach ($cableBlowingMachineCriteria as $criteria) {
            echo '
        <div class="py-2 px-5 rounded-lg bg-dark-blue text-white">
            <h4 class="pb-2 border-bottom">' . htmlspecialchars($criteria['title']) . '</h4>
            <p class="mt-2 text-sm">' . htmlspecialchars($criteria['description']) . '</p>
        </div>
    ';
        }
        ?>
    </div>
    <p class="text-base"> It’s important to do your research and consult with a professional before making a purchase. It’s also a good idea to test the machine before purchasing to make sure that it’s suitable for your application and to ensure that the manufacturer is reliable.</p>
    <p class="text-base">It’s important to keep in mind that the machine’s performance and efficiency are also important factors to consider, and the equipment must be able to handle the specific conditions of the job, such as the type and size of cable to be installed, the distance to be covered, and the conduit’s characteristics.</p>
    <div class="mt-5">
        <h3 class="text-center text-dark-blue font-semibold mb-2">Cable Blowing Machine Selection Chart</h3>
        <img src="/fibnet/public/images/Fiber Optics Solutions.webp" alt="" class="h-full w-full object-scale-down">
    </div>
</section>