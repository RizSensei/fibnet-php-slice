<?php
include './_partials/_page_header.php';
$label = " Blogs";
renderPageHeaderSection($label);
?>

<section
  class="w-full px-5 sm:px-10 lg:px-20 2xl:px-32 py-10 grid grid-cols-1 md:grid-cols-3 gap-5">
  <?php
  include '_partials/_side_blog_component.php';
  ?>
  <div id="blogs-container" class="col-span-2 flex flex-col gap-5 order-1 md:order-2">
    <script>
      const allBlogs = [1, 2];
      const allBlogsList = allBlogs.map((blog, idx) => `
          <div
      class="flex flex-col sm:flex-row rounded-2xl overflow-hidden shadow-2xl w-full h-full">
      <div class="h-96 2xl:h-80 flex-1">
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
          <a href="/fibnet/src/blog-details.php"
            class="cursor-pointer mt-10 bg-transparent flex gap-2 border-none items-center text-gray-800 group-hover:text-dark-blue transform ease-in-out duration-150">
            <h5 class="font-medium">Read More</h5>
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
      </div>
    </div>
      `).join("");
      document.getElementById("blogs-container").innerHTML = allBlogsList;
    </script>

  </div>
</section>