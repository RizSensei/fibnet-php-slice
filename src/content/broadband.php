<?php
include './_partials/_service_header.php';
$label = "Broadband For All";
renderServiceHeaderSection($label);
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

  <div class="mt-10">
    <div class="flex flex-col items-center">
      <h1 class="mt-5 text-3xl font-bold">
        Other <span class="text-dark-blue">Services</span>
      </h1>
    </div>
    <div
      id="services"
      class="service-container mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
      <script>
        const services = [{
            icon: "/fibnet/public/images/Products/Managed Services.png",
            label: "Managed Services",
            description: "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
          },
          {
            icon: "/fibnet/public/images/Products/Ocean Cable.png",
            label: "Broadband For all",
            description: "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
          },
          {
            icon: "/fibnet/public/images/Products/ICT Solutions.png",
            label: "ICT Solutions",
            description: "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
          },
          {
            icon: "/fibnet/public/images/Products/Infrastructure Development.png",
            label: "Infrastructure Development",
            description: "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
          },
        ];

        const servicesList = services
          .map(
            (service, idx) => `
                  <div class="service-card group relative rounded-2xl bg-white shadow-2xl hover:shadow-3xl p-10 flex flex-col items-start">
                  <div class="z-10 flex flex-col items-start">
                      <img src="${
                        service.icon
                      }" alt="" class="h-[80px] aspect-square object-contain" />
                      <h2 class="mt-4 pl-4 text-xl text-dark-blue font-semibold border-4 border-solid border-y-0 border-r-0">${
                        service.label
                      }</h2>
                      <p class="mt-4 text-xs text-gray-700 line-clamp-3">
                          ${service.description}
                      </p>
                      <a class="cursor-pointer mt-4 bg-transparent flex gap-2 border-none items-center text-gray-800 group-hover:text-dark-blue transform ease-in-out duration-150">
                          <h5 class="font-medium">Read More</h5>
                          <i class="fa-solid fa-plus"></i>
                      </a>
                  </div>
                  <div class="z-0 absolute top-20 right-8 group-hover:right-10 transform ease-in-out duration-150">
                      <h1 class="text-7xl text-gray-100">0${idx + 1}</h1>
                  </div>
              </div>
                  `
          )
          .join("");
        document.getElementById("services").innerHTML = servicesList;
      </script>
    </div>
  </div>
</div>