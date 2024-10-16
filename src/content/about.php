<div class="relative h-[400px] 2xl:h-[600px] w-full">
      <img
        src=".<?= $path ?>/assets/images/background-3.png"
        alt=""
        class="h-full w-full object-cover"
      />

      <div
        class="absolute top-5 2xl:top-20 left-10 bg-black bg-opacity-70 text-white"
      >
        <div class="max-w-md p-5">
          <h3 class="w-max pb-1 underline underline-offset-8">About Us</h3>
          <p class="mt-5 text-base">
            Welcome to Encode Genetics and Diagnostic Lab Pvt. Ltd., NPHL
            approved “B” Category lab, where cutting-edge science meets
            compassionate care. At ENCODE, we specialize in providing
            comprehensive diagnostic testing services tailored to meet the
            individual needs of our patients and healthcare partners. Whether
            you're seeking insights into your genetic predispositions, a precise
            diagnosis for a medical condition, or guidance on personalized
            treatment options, ENCODE is here to support you every step of the
            way
          </p>
        </div>
      </div>
    </div>

    <div class="w-full h-full bg-[#F6F6F6]">
      <div class="px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-12">
          <div class="w-full bg-primary">
            <div class="w-full h-full bg-white ml-5">
              <div class="p-10">
                <h4 class="w-max font-medium underline underline-offset-8">
                  Our Vision
                </h4>
                <p class="mt-5 text-sm text-justify">
                  To provide advanced genetic testing and diagnostic services,
                  empowering individuals and healthcare professionals with
                  accurate, timely, and actionable information for better
                  healthcare outcomes. We are committed to delivering
                  exceptional quality, reliability, and innovation in genetic
                  and diagnostic solutions, ultimately contributing to improved
                  health and well-being globally.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full bg-primary">
            <div class="w-full h-full bg-white ml-5">
              <div class="p-10">
                <h4 class="w-max font-medium underline underline-offset-8">
                  Our Mission
                </h4>
                <p class="mt-5 text-sm text-justify">
                  Our vision is to be a trusted leader in providing better
                  diagnostic services at your doorstep. We strive to advance
                  medical knowledge, enhance patient care, and drive positive
                  societal impact through our comprehensive range of genetic
                  tests and diagnostic solutions. By leveraging state-of-the-art
                  technology and fostering collaborations with healthcare
                  partners, we aim to transform personalized medicine and shape
                  the future of healthcare delivery
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
      <h1 class="text-primary w-full border-bottom pb-5 lg:hidden">Why Choose Us?</h1>
      <div
        class="float-left rounded-full p-10 hidden lg:block"
        style="shape-outside: circle(); clip-path: circle()"
      >
        <div
          class="relative h-[500px] w-[500px] p-5 rounded-full bg-gradient-to-r from-[#174D48] to-primary"
        >
          <img
            src="<?= $path ?>/assets/images/about-Vector.png"
            alt=""
            class="absolute inset-0 top-3 -left-5 h-[520px] w-[480px]"
          />
          <div class="absolute top-5 left-10">
            <div
              class="h-36 w-36 p-4 rounded-full flex flex-col items-center text-center justify-center bg-gradient-to-r from-[#174D48] to-primary text-white text-2xl break-words"
            >
              Why Choose Us
            </div>
          </div>
        </div>
      </div>
      <div class="clear-right">
        <ul id="reasons_to_choose" class="list-none">
          <script>
            const lists = reasons_to_choose
              .map(
                (list) => `
                      <li>
                        <h3 class="text-primary font-semibold text-lg">${list.heading}</h3>
                        <p class="text-sm">
                            ${list.description}
                        </p>
                    </li>
                `
              )
              .join("");
            document.getElementById("reasons_to_choose").innerHTML = lists;
          </script>
        </ul>
      </div>
    </div>

    <div class="mt-0 2xl:mt-12 px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
      <h2 class="w-max font-medium underline underline-offset-8">Our Teams</h2>

      <div class="mt-10">
        <div
          id="teams-container"
          class="owl-carousel owl-carousel-team owl-theme z-10"
        >
          <script>
            const teams = labTeam
              .map(
                (team) => `
                      <div class="relative h-96 bg-neutral-500 px-5">
            <img
              src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt=""
              class="h-full w-full object-cover"
            />
            <div class="absolute bottom-5 left-0 right-0 w-full bg-white bg-opacity-50 py-2 px-2">
              <div class="text-neutral-800 flex flex-col items-center justify-center">
                  <h3 class="font-medium">${team.name}</h3>
                  <h4>${team.designation}</h4>
              </div>
            </div>
          </div>
            `
              )
              .join("");
            document.getElementById("teams-container").innerHTML = teams;
          </script>
        </div>
      </div>
    </div>