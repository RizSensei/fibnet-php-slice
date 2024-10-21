<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Test Lists');
?>
<!-- page banner  -->

<div class="px-5 py-10 sm:px-10 xl:px-32 2xl:px-44">
  <div class="pb-5 border-bottom flex flex-wrap items-center gap-3">
    <div class="flex items-center gap-2">
      <h4 class="font-medium">Show</h4>
      <select
        class="form-select text-sm block w-full mt-1 rounded-md border-gray-300 shadow-sm">
        <option selected>10</option>
        <option>20</option>
        <option>30</option>
      </select>
      <h4 class="font-medium">Entries</h4>
    </div>
    <form action="#" class="relative text-sm flex-grow">
      <input
        type="search"
        name=""
        id=""
        class="w-full border border-neutral-200 rounded-md outline-none pl-10"
        placeholder="Search for tests with test codes (eg: 12604)" />
      <span
        class="absolute top-1/2 left-2 -translate-y-1/2 text-neutral-500">
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
            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
      </span>
    </form>
  </div>
  <div class="mt-5">
    <div class="w-full overflow-x-auto">
      <table class="w-full text-left table-row overflow-auto">
        <thead>
          <tr id="test-lists-heads">
            <script>
              const titles = test_lists_titles
                .map(
                  (title) => `
                         <th class="p-4 bg-primary text-white shrink-0">
                    <p
                      class="text-white block font-sans text-sm antialiased font-medium leading-none"
                    >
                      ${title}
                    </p>
                  </th>
                        `
                )
                .join("");
              document.getElementById("test-lists-heads").innerHTML = titles;
            </script>
          </tr>
        </thead>
        <tbody id="test-lists" class="text-sm">
          <script>
            const lists = test_lists
              .map(
                (list, i) => `
            <tr class=${i % 2 === 0 ? "bg-neutral-100" : "bg-white"}>
              <td class="p-4 font-medium text-neutral-700">${i + 1}</td>
              <td class="p-4 font-medium text-neutral-700">${list["Test Code"]}</td>
              <td class="p-4 font-medium text-neutral-700">${list["Test"]}</td>
              <td class="p-4 font-medium text-neutral-700">${list["Specimen"]}</td>
              <td class="p-4 font-medium text-neutral-700">${
                list["Sample Volume"]
              }</td>
              <td class="p-4 font-medium text-neutral-700">${list["Method"]}</td>
              <td class="p-4 font-medium text-neutral-700">${
                list["Report Schedule"]
              }</td>
            </tr>
                        `
              )
              .join("");
            document.getElementById("test-lists").innerHTML = lists;
          </script>
        </tbody>
      </table>
    </div>
  </div>
</div>