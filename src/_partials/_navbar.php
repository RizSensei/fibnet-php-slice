<nav
  id="navbar"
  class="sticky top-0 z-50 bg-white py-3 px-3 lg:px-10 shadow-md">
  <div class="flex justify-end items-center">
    <div class="flex items-center gap-5">
      <div class="hidden lg:inline-block gap-2">
        <ul
          id="nav_ul"
          class="list-none text-sm flex flex-col lg:flex-row gap-5">
          <script>
            const nav_items = navItems
              .map(
                (item) => `
                    <li class="nav_li">
                        <a href="<?= $path ?>/${item.route}.php" class="navbar-anchor-links">${item.name}</a>
                    </li>
                    `
              )
              .join("");
            document.getElementById("nav_ul").innerHTML = nav_items;
          </script>
        </ul>
      </div>
      <a href="<?= $path ?>/book-test.php"
        class="flex justify-center px-3 py-2 gap-2 items-center bg-primary text-white font-semibold">
        <span><svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
          </svg>
        </span>
        <h4 class="uppercase font-semibold">Book Appointment</h4>
      </a>
      <span class="lg:hidden">
        <button id="open-mobile-nav" class="bg-white cursor-pointer">
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
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg></button></span>
    </div>
  </div>
</nav>