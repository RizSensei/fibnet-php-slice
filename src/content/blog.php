<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Our Blogs');
?>
<!-- page banner  -->

<div class="px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
      <div class="pb-5 border-bottom flex flex-wrap items-center gap-3">
        <div class="flex items-center gap-2">
          <select
            class="form-select text-sm block w-full mt-1 rounded-md border-gray-300 shadow-sm"
          >
            <option disabled selected>Select Category</option>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
          </select>
        </div>
        <div class="flex items-center gap-2">
          <h5 class="font-medium">Filter By</h5>
          <div class="flex gap-2">
            <button class="cursor-pointer px-3 py-2 text-base border-0 bg-primary text-white rounded-md">Newest</button>
            <button class="cursor-pointer px-3 py-2 text-base border-0 bg-primary text-white rounded-md">Oldest</button>
          </div>
        </div>
        <form action="#" class="relative text-sm flex-grow">
          <input
            type="search"
            name=""
            id=""
            class="w-full border border-neutral-200 rounded-md outline-none pl-10"
            placeholder="Search for tests/packages..."
          />
          <span
            class="absolute top-1/2 left-2 -translate-y-1/2 text-neutral-500"
          >
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
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
              />
            </svg>
          </span>
        </form>
      </div>

      <div id="blog-container" class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-5">
        <script>
          const blogs = [1,1,1].map((blog) => `
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
                How to Increase Hemoglobin Levels Quickly: Foods & Natural Tips
              </h4>
              <a href="<?= $path ?>/blog-details.php"
                class="px-3 py-2 w-max bg-primary text-sm text-white rounded-md flex items-center gap-2"
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
          `).join("");
          document.getElementById("blog-container").innerHTML = blogs;
        </script>
      </div>
    </div>