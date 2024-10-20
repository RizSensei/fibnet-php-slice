<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Online Report');
?>
<!-- page banner  -->

<div class="mt-10 px-5 sm:px-10 xl:px-40 2xl:px-44">
      <div class="h-full w-full min-h-screen">
        <div class="flex flex-col items-center justify-center text-center">
          <h3 class="text-base">Please log in to view your reports</h3>
          <div class="mt-12 max-w-xl w-full rounded-lg overflow-hidden shadow-xl py-5 px-5 sm:px-10 md:px-16 lg:px-20">
            <form action="#" class="flex flex-col items-center justify-center">
              <h2 class="font-medium">Login</h2>
              <div class="mt-5 w-full flex flex-col items-center gap-5">
                <input
                  type="text"
                  class="form-input input-style"
                  placeholder="Username"
                />
                <input
                  type="text"
                  class="form-input input-style"
                  placeholder="Password"
                />
                <button
                  class="px-5 py-2 border-0 text-base bg-primary text-white rounded-md"
                >
                  LOGIN
                </button>
              </div>
            </form>

            <p class="mt-10 text-center text-sm">Use the credentials provided by the encode genetic & diagnostic lab</p>
          </div>
        </div>
      </div>
    </div>