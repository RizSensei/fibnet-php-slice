<div class="lg:hidden">
      <div
        id="sidebar"
        class="h-full w-full fixed inset-0 bg-black bg-opacity-80 z-50"
      >
        <div class="h-full w-2/3 bg-white">
          <div
            class="px-5 w-full flex justify-between items-center border-bottom"
          >
            <div
              class="h-20 aspect-video w-auto overflow-hidden flex flex-col items-center justify-center p-2"
            >
              <img
                src="/fibnet/public/images/Logo/Fibnet Logo.png"
                alt="Fibnet Logo"
                class="w-auto h-auto max-w-full max-h-full object-contain flex-shrink-0"
              />
            </div>
            <button
              id="close-sidebar"
              class="bg-transparent border-none text-red-500 hover:scale-105 duration-150 transform ease-in-out"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="px-5 pt-5">
            <div
              id="sidebar-section"
              class="flex flex-col lg:flex-row items-start lg:items-center gap-1"
            >
              <script>
                const sidebarLists = navItems
                  .map(
                    (nav, idx) => `
                                  <a href="${nav.href}" class="text-xs font-medium uppercase text-dark-blue p-2 lg:p-1 rounded-md hover:bg-gray-100 w-full lg:text-center">${nav.label}</a>
                    `
                  )
                  .join("");
                document.getElementById("sidebar-section").innerHTML =
                  sidebarLists;
              </script>
            </div>
          </div>
        </div>
        <div class="flex-1 grow"></div>
      </div>
    </div>