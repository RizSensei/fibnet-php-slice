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

    <div id="side-blog-container" class="mt-10 flex flex-col gap-3">
        <script>
            const blogs = [1, 2];
            const blogsList = blogs
                .map(
                    (blog, idx) => `
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

                    `
                )
                .join("");
            document.getElementById("side-blog-container").innerHTML = blogsList;
        </script>

    </div>
</div>