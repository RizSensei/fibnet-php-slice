<?php
include './_partials/_breadcrumb_header.php';
$parent_label = "Service";
$parent_label_href = "/fibnet/src/services.php";
$label = "Broadband For All";
renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label);

?>


<div class="w-full h-full py-10 px-5 sm:px-10 lg:px-20 2xl:px-32">
  <p class="text-base text-gray-800">
    Fibnet Inc from California, USA authorized global Representative of
    the Stainless Steel tube and Steel Armored with Corning glass Fiber
    Optics Cable which is robust, thin, light weight, flexible, rodent
    proof, water proof, fire resistance from Ocean Cable and
    Communications Japan, especially designed for rural and any harsh
    environment based on submarine cable. We are also Partners with Taihan
    America, Upcom, and Canovate for all FTTH to FTTX's products.
  </p>
  <!-- industry  -->
  <div class="mt-5 border-bottom">
    <h2 class="text-dark-blue font-semibold">Industry Involvement</h2>
    <div
      id="industry-section"
      class="w-full py-2.5 flex flex-wrap justify-center gap-2">
      <script>
        const industries = [
          "/fibnet/public/images/Services-Mock/Industry/industry-1.png",
          "/fibnet/public/images/Services-Mock/Industry/industry-2.png",
          "/fibnet/public/images/Services-Mock/Industry/industry-3.jpeg",
          "/fibnet/public/images/Services-Mock/Industry/industry-4.png",
          "/fibnet/public/images/Services-Mock/Industry/industry-5.png",
          "/fibnet/public/images/Services-Mock/Industry/industry-6.jpeg",
        ];

        const industryList = industries
          .map(
            (industry, idx) => `
              <div class="h-24 w-auto overflow-hidden flex flex-col items-center justify-center p-2">
                  <img src="${industry}" alt="partner" class="w-auto h-auto max-w-full max-h-full object-scale-down" loading="lazy" />
              </div>
  
                      `
          )
          .join("");
        document.getElementById("industry-section").innerHTML =
          industryList;
      </script>
    </div>
  </div>

  <?php
  include './_partials/_other_services.php';
  echo renderServices();
  ?>
</div>