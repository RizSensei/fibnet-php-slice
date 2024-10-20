<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Package Details');
?>
<!-- page banner  -->

<div class="flex-grow bg-gray-50 h-full w-full">
      <div class="px-5 py-5 sm:px-10 xl:px-24 2xl:px-44">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
          <div class="col-span-2 bg-white rounded-md py-5 px-5 sm:px-10">
            <div class="flex flex-col gap-2">
              <h2 class="font-semibold uppercase">BASIC HEALTH PACKAGE</h2>
              <p class="text-sm">48 Tests Included</p>
              <div class="flex gap-3 text-neutral-700 border-bottom pb-2">
                <span class="line-through font-semibold"
                  >Rs 5300</span
                >
                <span class="text-primary font-semibold">Rs 3499</span>
              </div>
              <div class="max-w-sm flex justify-between">
                <div>
                  <p class="text-sm">Fasting</p>
                  <span class="mt-2 font-semibold">10-12 hrs required</span>
                </div>
                <div>
                  <p class="text-sm">Reports</p>
                  <span class="mt-2 font-semibold">12 hrs required</span>
                </div>
              </div>

              <div class="mt-3 flex gap-2 items-center">
                <img
                  src="<?= $path ?>/assets/images/home-delivery-vector.png"
                  alt=""
                  class="h-10 w-12"
                />
                <span class="font-semibold text-neutral-800"
                  >HOME SAMPLE COLLECTION AVAILABLE</span
                >
              </div>

              <div class="mt-5">
                <p class="text-sm">
                  The Annual Health checkup Advance package covers 91 parameters
                  of tests including CBC, ESR, BSF, HbA1c, Lipid, HsCRP, LFT,
                  KFT, Thyroid profile, Vit B12 & D and urine routine with free
                  HsCRP The Annual Health checkup Advance package covers 91
                  parameters of tests including CBC, ESR, BSF, HbA1c, Lipid,
                  HsCRP, LFT, KFT, Thyroid profile, Vit B12 & D and urine
                  routine with free HsCRP
                </p>

                <div class="mt-3">
                    <button class="px-5 py-2 cursor-pointer border-0 text-white bg-primary uppercase rounded-md">Book Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-2 lg:col-span-1 bg-white rounded-md py-5 px-5">
            <h3>Other Packages</h3>
            <div id="package-container" class="mt-5 flex flex-col gap-3">
              <script>
                const packages = [1, 1, 1, 1]
                  .slice(0, 3)
                  .map(
                    () => `
             <a href="<?= $path ?>/package-details.php" class="relative w-full border border-solid border-neutral-300 shadow-lg rounded-md overflow-hidden">
              <div class="grid grid-cols-3 gap-1">
                <div class="col-span-2 flex flex-col gap-2 p-5 z-20">
                  <img
                  src="<?= $path ?>/assets/images/encode-logo.png"
                  alt=""
                  class="h-8 w-20"
                />
                <h3 class="text-neutral-800 font-semibold">BASIC HEALTH
                  PACKAGE</h3>
                  <h5 class=""><span class="text-neutral-700 line-through font-medium">Rs 5300</span>&nbsp;&nbsp;<span class="text-primary font-medium">Rs 3499</span></h5>
                  <h5 class="font-medium text-neutral-700">48 TESTS INCLUDED</h5>
                </div>
                    <div class="z-[2] absolute -bottom-2 right-0 "><img src="<?= $path ?>/assets/images/package-img-1.png" alt="" class="w-full h-full object-scale-down"></div>
                    <div class="z-1 absolute -bottom-10 -right-5">
                    <div class="h-48 w-48 rounded-full bg-[#b4f3c3]"></div>
                  </div>
            </div>
          </a>
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
    </div>