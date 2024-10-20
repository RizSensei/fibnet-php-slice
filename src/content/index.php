 <!-- landing banner  -->
 <div class="-z-40 owl-carousel owl-carousel-banner owl-theme">
   <div class="relative h-[500px] 2xl:h-[700px] w-full">
     <img
       src="<?= $path ?>/assets/images/landing-background.png"
       alt=""
       class="h-full w-full object-cover" />
   </div>
 </div>

 <div class="relative h-full w-full pb-5 z-20 bg-primary">
   <div class="z-20 flex px-5 py-5 sm:px-10 xl:px-32 2xl:px-44 gap-5">
     <div class="z-20 w-full flex justify-center gap-5">
       <div id="details-container"
         class="z-20 grid grid-cols-2 md:grid-cols-4 gap-3">

         <script>
           const details = [{
               image: 'delivery.png',
               label: 'Free Home Collection'
             },
             {
               image: 'carbon_report.png',
               label: 'Online Reports'
             },
             {
               image: 'ph_note-duotone.png',
               label: 'Online Booking'
             },
             {
               image: 'fluent-mdl2_test-case.png',
               label: '500+ Tests'
             },
           ]

           const items = details.map((item) => `
                   <div class="p-5 shadow-lg bg-primary w-full">
           <div class="w-full flex flex-col items-center justify-center">
             <div class="p-3 rounded-full bg-white">
               <img
                 src="<?= $path ?>/assets/images/icon/${item.image}"
                 alt=""
                 class="" />
             </div>
             <h4 class="mt-2 text-white text-center font-medium">
          ${item.label}
             </h4>
           </div>
         </div>
          `).join("");
           document.getElementById("details-container").innerHTML = items;
         </script>
       </div>
     </div>
   </div>
   <!-- <div class="absolute bottom-0 z-0 w-full">
     <img
       src="<?= $path ?>/assets/images/wave-vector.png"
       alt=""
       class="h-[500px] w-full" />
   </div> -->
 </div>

 <!-- Encode Genetic & Diagnostic Lab health provides Free Home Collection -->
 <div class="relative h-[500px] md:h-[400px] w-full">
   <img
     src="<?= $path ?>/assets/images/background-2.png"
     alt=""
     class="h-full w-full object-cover" />
   <div class="absolute inset-0 bg-primary bg-opacity-20">
     <div class="h-full w-full flex flex-col items-center justify-center">
       <h1
         class="w-full max-w-3xl text-center text-white font-semibold px-5 sm:px-0">
         Encode Genetic & Diagnostic Lab health provides Free Home
         Collection
       </h1>
       <div class="mt-12">
         <div
           id="process-div"
           class="max-w-4xl grid grid-cols-3 md:grid-cols-6 gap-2">
           <script>
             const process = processes
               .map(
                 (item, index) => `
                                <div class="pentagon-wrapper">
                  <div class="pentagon-outer">
                    <div class="pentagon-inner">
                      <h1 class="pentagon-inner-content">${index + 1}</h1>
                    </div>
                  </div>
                  <div class="pentagon-outer-content">${item}</div>
                </div>
                  `
               )
               .join("");
             document.getElementById("process-div").innerHTML = process;
           </script>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Encode Genetic & Diagnostic Lab health check-up packages! -->
 <div>
   <div class="bg-primary px-5 py-5 sm:px-10 xl:px-32 2xl:px-44">
     <div class="flex flex-col text-white items-center text-center">
       <h1 class="w-full max-w-2xl text-center text-white font-semibold">
         Encode Genetic & Diagnostic Lab health check-up packages!
       </h1>
       <div id="package-category-buttons" class="flex flex-wrap justify-center mt-5">
         <script>
           const package_categories = ["Show All", "Whole Body Package", "Mom to Be Package", "Basic Health Package"]
           const categoriesBtns = package_categories.map((category) => `
        <button class="button-style bg-white cursor-pointer px-3 py-2 border-0 text-neutral-800 font-medium text-sm hover:bg-neutral-300">${category}</button>
          `).join("");
           document.getElementById("package-category-buttons").innerHTML = categoriesBtns;
         </script>
       </div>
     </div>
   </div>
   <div class="px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
     <div
       id="package-container"
       class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
       <script>
         const packages_lists = [1, 1, 1, 1, 1, 1]
           .map(
             (package) => `
            <a href="<?= $path ?>/package-details.php" class="border border-solid border-neutral-300 shadow-lg rounded-md">
              <div class="grid grid-cols-3 gap-1 overflow-hidden">
                <div class="col-span-2 flex flex-col gap-2 p-5 ">
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
                <div class="relative">
                  <img src="<?= $path ?>/assets/images/package-img-1.png" alt="" class="w-full h-full object-cover">
                  <div class="-z-10 absolute -bottom-10 -right-5">
                    <div class="h-48 w-48 rounded-full bg-[#b4f3c3]"></div>
                  </div>
                </div>
            </div>
          </a>
              `
           )
           .join("");
         document.getElementById("package-container").innerHTML =
           packages_lists;
       </script>
     </div>
   </div>
   <div class="px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
     <div class="flex flex-col items-center justify-center">
       <div
         class="px-5 py-2 text-sm border border-solid border-neutral-500 text-neutral-600 rounded-lg">
         Explore All Our Healthcare Packages?
         <a href="#" class="no-underline font-semibold text-primary">Click Here</a>
       </div>
     </div>
   </div>
 </div>

 <!-- are you seeking a test  -->
 <div class="mt-5">
   <div class="bg-primary px-5 sm:px-10 xl:px-32 2xl:px-44">
     <div class="grid grid-cols-1 sm:grid-cols-2">
       <div class="relative hidden sm:inline-block">
         <img
           src="<?= $path ?>/assets/images/lady-image.png"
           alt=""
           class="z-0 absolute bottom-0 -left-16 sm:-left-10" />
       </div>
       <div class="z-10 flex flex-col gap-3 py-10">
         <h2 class="text-white">"Are you seeking a test or packages?"</h2>
         <form action="" class="relative">
           <input
             type="search"
             name=""
             id=""
             class="w-full border-0 rounded-md pl-10"
             placeholder="Search for tests/packages..." />
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
         <div class="flex gap-2">
           <a href="<?= $path ?>/test-lists.php" class="text-sm font-semibold bg-white text-neutral-800 rounded-md px-5 py-3">
             Select Tests
           </a>
           <a href="<?= $path ?>/packages.php" class="text-sm font-semibold bg-white text-neutral-800 rounded-md px-5 py-3">
             Select Packages
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- what our client says  -->
 <div class="mt-5 px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
   <h2 class="w-max font-medium underline underline-offset-8">
     What Our Clients Say!
   </h2>
   <div class="mt-5">
     <div
       id="testimonials-container"
       class="owl-carousel owl-carousel-testimonial owl-theme z-10">
       <script>
         const testimonials = [1, 1, 1, 1]
           .map(
             (item) => `
              <div class="p-3 rounded-md shadow-lg">
              <div class="flex items-center gap-3 pb-2 border-bottom">
                <div class="h-10 w-10 rounded-full overflow-hidden">
                  <img
                    src="https://images.pexels.com/photos/1674752/pexels-photo-1674752.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt=""
                    class="h-full w-full object-cover"
                  />
                </div>
                <div>
                  <h4>Daniel Brian</h4>
                  <p class="text-sm">Kathmandu</p>
                </div>
              </div>
              <div class="mt-2">
                <div class="text-yellow-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    fill="currentColor"
                    class="size-6"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    fill="currentColor"
                    class="size-6"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    fill="currentColor"
                    class="size-6"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <p class="text-sm">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                  ab ipsa fugit incidunt dolore eaque. Veritatis ipsa fugiat
                  amet. Quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe soluta provident libero laudantium, autem tempora voluptates cupiditate atque error exercitationem?
                </p>
              </div>
            </div>
              `
           )
           .join("");
         document.getElementById("testimonials-container").innerHTML =
           testimonials;
       </script>
     </div>
   </div>
 </div>

 <!-- our clients and partners  -->
 <div class="mt-5 px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
   <h2 class="w-max font-medium underline underline-offset-8">
     Our Partners & Clients
   </h2>
   <div class="mt-5">
     <div
       id="clients-container"
       class="owl-carousel owl-carousel-client owl-theme z-10">
       <script>
         const clientsList = clients
           .map(
             (client) => `
             <div class="h-24 w-full">
              <img src="<?= $path ?>/assets/images/partners/${client}" alt="" class="h-full w-full object-fit">
              </div>
            `
           )
           .join("");
         document.getElementById("clients-container").innerHTML =
           clientsList;
       </script>
     </div>
   </div>
 </div>

 <!-- our blogs  -->
 <div class="mt-5 px-5 py-10 sm:px-10 xl:px-32 2xl:px-44 bg-gray-50">
   <h2 class="w-max font-medium underline underline-offset-8">
     Our Blogs
   </h2>
   <div class="mt-5">
     <div
       id="blogs-container"
       class="owl-carousel owl-carousel-blog owl-theme z-10">
       <script>
         const blogsLists = [1, 1, 1, 1]
           .map(
             (item) => `
              <div>
              <div class="relative h-[220px] w-full rounded-md">
                <img
                  src="https://images.pexels.com/photos/2751755/pexels-photo-2751755.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt=""
                  class="h-full w-full object-cover rounded-md"
                />
                <div class="absolute -bottom-10 right-5">
                  <div
                    class="h-24 w-24 text-xl font-bold rounded-full bg-primary text-white flex flex-col items-center justify-center"
                  >
                    <span>12</span>
                    <span class="uppercase">JUN</span>
                  </div>
                </div>
              </div>
              <div class="mt-2 flex flex-col gap-2">
                <div class="flex items-center gap-2">
                  <div class="h-8 w-8 rounded-full overflow-hidden">
                    <img
                      src="https://images.pexels.com/photos/1674752/pexels-photo-1674752.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                      alt=""
                      class="h-full w-full object-cover"
                    />
                  </div>
                  <span class="text-sm">Posted By: Admin</span>
                </div>
                <h4 class="font-medium break-words line-clamp-2">
                  How to Increase Hemoglobin Levels Quickly: Foods & Natural
                  Tips
                </h4>
                <a href="<?php $path ?>/blog-details.php"
                  class="w-max px-3 py-2 text-sm bg-primary text-white rounded-md flex items-center gap-2"
                >
                  <span>READ MORE</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"
                    />
                  </svg>
                </a>
              </div>
            </div>
              `
           )
           .join("");
         document.getElementById("blogs-container").innerHTML = blogsLists;
       </script>
     </div>
   </div>
 </div>

 <div id="popup-layout" class="fixed top-0 h-[100vh] w-full bg-black bg-opacity-60 overflow-hidden z-50">
   <div class="h-full grid place-items-center">
     <?php
      include '_partials/_popup.php';
      ?>
   </div>
 </div>