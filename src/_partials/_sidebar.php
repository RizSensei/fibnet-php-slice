    <!-- mobile-navbar  -->
    <div class="lg:hidden">
      <div
        id="mobile-sidebar"
        class="fixed top-0 z-[100] overflow-hidden h-screen w-full bg-black bg-opacity-75"
      >
        <div class="flex w-full h-full">
          <div
            class="h-full w-80 bg-white px-5 pt-3 pb-5 flex flex-col gap-5 overflow-y-auto"
          >
            <div
              class="pb-2 flex justify-between items-center border-b border-solid border-x-0 border-t-0 border-b-blue/50"
            >
              <a href="../src/index.html">
                <img
                  src="../src/assets/images/encode-logo.png"
                  alt="Innovative Solution Logo"
                  class="h-16"
                />
              </a>
              <span
                id="close-mobile-nav"
                class="hover:text-red-500 cursor-pointer"
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
                    d="M6 18 18 6M6 6l12 12"
                  />
                </svg>
              </span>
            </div>
            <div class="flex flex-col gap-5 justify-between">
              <ul
                id="nav_ul"
                class="list-none text-sm flex flex-col lg:flex-row gap-5"
              >
                <!-- <script>
                  const nav_items = navItems
                    .map(
                      (item) => `
                      <li class="nav_li">
                          <a href="${item.route}" class="navbar-anchor-links">${item.name}</a>
                      </li>
                      `
                    )
                    .join("");
                  document.getElementById("nav_ul").innerHTML = nav_items;
                </script> -->
              </ul>
            </div>
          </div>
          <div id="mobile-sidebar-right" class="flex-grow"></div>
        </div>
      </div>
    </div>