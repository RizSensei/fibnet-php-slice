<div class="padded-container">
  <div
    class="w-full flex flex-col lg:flex-row gap-2 md:gap-0 justify-between">
    <h1 class="font-bold text-7xl text-lime-green">Bridge the Future.</h1>
    <div class="pt-10 lg:pt-0 max-w-md 2xl:max-w-2xl flex flex-col gap-3">
      <p class="text-xs text-gray-800">
        Established in March 2017, FibNet has an extensive knowledge of
        Information and Communication Technology, Furthermore We are an
        eclectic
      </p>
      <a href="#" class="anchor-button">
        <p class="text-xs uppercase font-semibold">
          Book a Free Consultation
        </p>
        <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- hero image background  -->
<div class="h-full md:h-[600px] w-full">
  <img
    src="/fibnet/public/images/Hero Image.png"
    alt=""
    class="w-full h-full object-cover" />
</div>

<!-- alliances  -->
<div class="border-bottom">
  <div
    id="alliances-section"
    class="w-full py-2.5 flex flex-wrap justify-center gap-2">
    <script>
      const alliances = [
        "/fibnet/public/images/Alliances/OCC.png",
        "/fibnet/public/images/Alliances/inficare-logo.png",
        "/fibnet/public/images/Alliances/sns-logo.png",
        "/fibnet/public/images/Alliances/mavorion.png",
      ];

      const allianceList = alliances
        .map(
          (alliance, idx) => `
            <div class="h-16 md:h-24 w-auto overflow-hidden flex flex-col items-center justify-center p-2">
                <img src="${alliance}" alt="partner" class="w-auto h-auto max-w-full max-h-full object-scale-down" loading="lazy" />
            </div>

                    `
        )
        .join("");
      document.getElementById("alliances-section").innerHTML = allianceList;
    </script>
  </div>
</div>

<!-- services  -->
<div class="padded-container">
  <div class="relative h-full w-full">
    <div class="grid grid-cols-1 lg:grid-cols-3">
      <div class="order-2 lg:order-1 col-span-1 lg:col-span-2 z-10">
        <div class="grid grid-cols-3 gap-2">
          <div class="relative col-span-1 h-60 w-full">
            <img
              src="/fibnet/public/images/Services-Mock/Broadband for ALL.png"
              alt=""
              class="h-full w-full object-cover" />
            <div class="absolute inset-0 h-full w-full">
              <div class="p-5 h-full flex flex-col justify-end">
                <p class="font-semibold text-white">Broadband for ALL</p>
              </div>
            </div>
          </div>
          <div class="relative col-span-2 h-60 w-full">
            <img
              src="/fibnet/public/images/Services-Mock/Infrastructure Development.png"
              alt=""
              class="h-full w-full object-cover" />
            <div class="absolute inset-0 h-full w-full">
              <div class="p-5 h-full flex flex-col justify-end">
                <p class="font-semibold text-white">
                  Infrastructure Development
                </p>
              </div>
            </div>
          </div>
          <div class="relative col-span-2 h-60 w-full">
            <div class="relative h-full w-full bg-lime-green overflow-hidden">
              <div class="absolute -top-36 -left-48">
                <img
                  src="/fibnet/public/images/Network Image.png"
                  alt=""
                  class="h-full w-full object-cover" />
              </div>
            </div>
            <div class="absolute inset-0 h-full w-full">
              <div class="p-5 h-full flex flex-col justify-end">
                <p class="font-semibold text-white">ICT Solutions</p>
              </div>
            </div>
          </div>
          <div class="relative col-span-1 h-60 w-full">
            <img
              src="/fibnet/public/images/Services-Mock/Managed Services.png"
              alt=""
              class="h-full w-full object-cover" />
            <div class="absolute inset-0 h-full w-full">
              <div class="p-5 h-full flex flex-col justify-end">
                <p class="font-semibold text-white">Managed Services</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="order-1 lg:order-2 w-full flex justify-center">
        <h1 class="text-2xl font-bold pb-5">Our Services</h1>
      </div>
    </div>
    <div class="absolute top-0 -right-60 -z-0">
      <img
        src="/fibnet/public/images/Network Image.png"
        alt=""
        class="h-full w-full object-cover" />
    </div>
  </div>
</div>

<!-- our products  -->
<div class="products-container padded-container">
  <div class="flex flex-col gap-5">
    <h1 class="text-2xl font-bold text-center w-full mb-5">Our Products</h1>
    <div
      id="products-section"
      class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-y-5">
      <script>
        const products = [{
            icon: "/fibnet/public/images/Products/Managed Services.png",
            label: "Managed Services",
            description: "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
          },
          {
            icon: "/fibnet/public/images/Products/Ocean Cable.png",
            label: "Ocean Cable",
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
          {
            icon: "/fibnet/public/images/Products/Tiahan Optical Cable.png",
            label: "Tiahan Optical Cable",
            description: "Fibnet Inc is authorized global Representative of the Stainless Steel tube and Steel Armored with Corning glass Fiber Optics Cable.",
          },
        ];

        const productsList = products
          .map(
            (product, idx) => `
            
            <div class="product-card px-1 md:px-5 flex flex-col gap-2 items-center justify-center">
                <img src="${product.icon}" alt="" class="h-[70px] aspect-square object-contain" />
                <h2 class="text-center text-base font-semibold">${product.label}</h2>
                <p class="text-xs text-center">
                  ${product.description}
                </p>
            </div>
            `
          )
          .join("");
        document.getElementById("products-section").innerHTML =
          productsList;
      </script>
    </div>
  </div>
</div>

<!-- testimonials  -->
<div class="padded-container">
  <div class="relative h-full w-full">
    <div class="grid grid-cols-3">
      <div class="w-full flex justify-center">
        <h1 class="text-2xl font-bold">Testimonials</h1>
      </div>
      <div class="relative col-span-2">
        <div data-aos="fade-left" class="h-72 aspect-video">
          <img
            src="/fibnet/public/images/Testimonial-mock.png"
            alt=""
            class="h-full w-full object-contain" />
        </div>

        <div data-aos="fade-left" class="absolute -bottom-10 right-0">
          <div class="h-64 aspect-video bg-lime-green">
            <div
              class="h-full w-full flex flex-col items-start justify-end p-10">
              <img
                src="/fibnet/public/images/invertedcomma.png"
                alt=""
                class="h-32 aspect-square object-contain" />
              <p class="text-white mt-2 font-medium">
                The possibilities to explore and experiment keep me going.
                From being one of the first few employees on a project to
                leading a
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute top-0 left-0 -z-10">
      <img
        src="/fibnet/public/images/Network Image.png"
        alt=""
        class="h-full w-full object-cover" />
    </div>
  </div>
</div>

<!-- blogs  -->
<div class="border-bottom">
  <div class="padded-container">
    <div class="flex flex-col gap-5">
      <h1 class="text-2xl font-bold text-center w-full mb-5">Blogs</h1>
      <div
        id="blogs-section"
        class="blogs-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5">
        <script>
          const blogs = [{
              cover_image: "/fibnet/public/images/Blogs-Mock/Blog-1.png",
            },
            {
              cover_image: "/fibnet/public/images/Blogs-Mock/Blog-2.png",
            },
            {
              cover_image: "/fibnet/public/images/Blogs-Mock/Blog-3.png",
            },
          ];

          const blogsList = blogs
            .map(
              (blog, idx) => `
            
            <div class="blog-card-container flex flex-col gap-2 items-center justify-center">
                <a href="#" class="cursor-pointer h-full w-full"><img src="${blog.cover_image}" alt="" class="h-60 w-full object-cover shadow-xl transform ease-in-out duration-150" /></a>
                <h6 class="text-center text-sm text-gray-800">Announcement</h6>
                <p class="text-sm text-center text-gray-500 font-medium">
                 Turning Vision into Reality by Nurturing Your Startup's First Steps
                </p>
            </div>
            `
            )
            .join("");
          document.getElementById("blogs-section").innerHTML = blogsList;
        </script>
      </div>
    </div>
  </div>
</div>

<div class="padded-container">
  <div
    class="w-full flex flex-col md:flex-row gap-2 md:gap-0 justify-between">
    <h1 class="font-bold text-xl md:text-3xl text-lime-green">
      Build your strategy with FIBNET
    </h1>
    <a href="/fibnet/src/contact.php" class="anchor-button">
      <p class="text-xs uppercase font-semibold">Contact Us</p>
      <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</div>

<script>
  AOS.init();
</script>