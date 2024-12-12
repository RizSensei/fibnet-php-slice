<nav class="border-bottom">
      <div class="container mx-auto w-full px-10 2xl:px-0">
        <div class="w-full flex justify-between">
          <a href="/fibnet/src/index.php">
            <div
              class="h-24 w-auto overflow-hidden flex flex-col items-center justify-center p-2"
            >
              <img
                src="/fibnet/public/images/Logo/Fibnet Logo.png"
                alt="Fibnet Logo"
                class="w-auto h-auto max-w-full max-h-full object-contain flex-shrink-0"
              />
            </div>
          </a>
          <div class="flex items-center gap-2">
            <div class="hidden lg:inline-block">
              <div
                id="nav-section"
                class="flex flex-col lg:flex-row items-start lg:items-center gap-1"
              >
                <script>
                  const navsLists = navItems
                    .map(
                      (nav, idx) => `
                                    <a href="${nav.href}" class="text-xs font-medium uppercase text-dark-blue p-2 lg:p-1 rounded-md hover:bg-gray-100 w-full lg:w-auto lg:text-center">${nav.label}</a>
                      `
                    )
                    .join("");
                  document.getElementById("nav-section").innerHTML = navsLists;
                </script>
              </div>
            </div>
            <!-- <button
              disabled="disabled"
              class="bg-dark-blue p-2.5 flex gap-1.5 items-center rounded-lg border-none"
            >
              <div
                class="h-3 w-3 rounded-full bg-lime-green-bright shrink-0"
              ></div>
              <p class="text-xs uppercase text-white font-semibold">
                New update
              </p>
            </button> -->
            <a
              href="#"
              class="cursor-pointer text-gray-800 no-underline border border-solid border-gray-800 py-2.5 px-5 rounded-xl flex gap-5 items-center"
            >
              <p class="text-xs uppercase font-semibold hidden lg:inline-block">
                Search
              </p>
              <span class="hidden lg:inline-block"
                ><i class="fa-solid fa-arrow-right"></i
              ></span>
              <span class="lg:hidden"
                ><i class="fa-solid fa-magnifying-glass"></i
              ></span>
            </a>
            <button
              id="open-sidebar"
              class="lg:hidden bg-white cursor-pointer text-gray-800 border border-solid border-gray-800 py-2.5 px-5 rounded-xl"
            >
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>