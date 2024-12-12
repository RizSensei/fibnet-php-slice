<?php
include './_partials/_page_header.php';
$label = " Blogs";
renderPageHeaderSection($label);
?>

<section
  class="w-full px-5 sm:px-10 lg:px-20 2xl:px-32 py-10 grid grid-cols-1 md:grid-cols-3 gap-5">
  <div class="h-max flex flex-col rounded-2xl shadow-2xl p-5 order-2 md:order-1">
    <div class="relative rounded-2xl overflow-hidden bg-gray-100">
      <input
        type="text"
        placeholder="Enter keyword"
        class="text-sm border-none w-full py-4 px-4 pr-10 bg-gray-100 text-gray-800" />
      <span
        class="w-max h-max absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-800">
        <i class="fa-solid fa-arrow-right"></i>
      </span>
    </div>

    <div class="mt-10 flex flex-col gap-2">
      <div class="flex flex-row md:flex-col lg:flex-row gap-5">
        <div
          class="h-24 aspect-square overflow-hidden rounded-xl shrink-0">
          <img
            src="/fibnet/public/images/Header-Background.jpg"
            alt=""
            class="h-full w-full object-cover" />
        </div>
        <div>
          <h6 class="text-dark-blue mb-2">August 32, 2023</h6>
          <a
            href="#"
            class="font-semibold text-gray-800 hover:text-dark-blue smooth-transform">Don’t Miss Your Favorite Matches As We Stream Them Online</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-span-2 flex flex-col order-1 md:order-2">
    <div
      class="flex flex-col sm:flex-row rounded-2xl overflow-hidden shadow-2xl w-full h-full">
      <div class="h-96 2xl:h-[450px] flex-1">
        <img
          src="https://wdtnetlink.wpengine.com/wp-content/uploads/2023/08/blog-11.jpg"
          alt=""
          class="w-full h-full object-cover" />
      </div>
      <div class="w-full flex-1">
        <div class="p-5">
          <h4 class="text-dark-blue mb-2">August 32, 2023</h4>
          <h3
            class="font-semibold text-gray-800 hover:text-dark-blue smooth-transform">
            Don’t Miss Your Favorite Matches As We Stream Them Online
          </h3>
          <p class="mt-5 text-sm text-gray-700 line-clamp-4">
            Sit amet consectetur adipiscing elit pellentesque habitant
            morbi. In tellus integer feugiat scelerisque varius morbi
            enim. Sit amet nisl
          </p>
          <a
            class="cursor-pointer mt-10 bg-transparent flex gap-2 border-none items-center text-gray-800 group-hover:text-dark-blue transform ease-in-out duration-150">
            <h5 class="font-medium">Read More</h5>
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
      </div>
    </div>
  </div>