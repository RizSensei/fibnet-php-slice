<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Book A Test');
?>
<!-- page banner  -->

<div class="px-5 py-10 sm:px-10 xl:px-40 2xl:px-44">

  <div class="h-full w-full flex flex-col items-center">
    <div
      class="mt-5 max-w-2xl w-full rounded-lg overflow-hidden shadow-xl py-5 px-5 sm:px-10 md:px-16 lg:px-20">
      <h4 class="text-neutral-500">
        Test Code: <span class="text-neutral-900 font-semibold text-lg">12987</span>
      </h4>
      <form action="#" class="mt-5 flex flex-col">
        <h4 class="pb-2 w-full underline underline-offset-8">
          Please fill up the following details for booking
        </h4>
        <div class="mt-5 text-sm md:text-base w-full grid grid-cols-1 md:grid-cols-2 gap-2">
          <input
            type="text"
            class="form-input col-span-1 md:col-span-2 input-style"
            placeholder="Please type the Test Name (eg : CBC)*" />
          <input
            type="text"
            class="form-input input-style"
            placeholder="Full Name*" />
          <input
            type="email"
            class="form-input input-style"
            placeholder="Email*" />
          <input
            type="text"
            class="form-input input-style"
            placeholder="Phone Number*" />
          <input
            type="email"
            class="form-input input-style"
            placeholder="Age" />
          <input
            type="text"
            class="form-input input-style"
            placeholder="Gender" />
          <input
            type="email"
            class="form-input input-style"
            placeholder="City" />
        </div>
        <div class="mt-5 w-full flex justify-center gap-2">
          <button
            class="bg-primary text-white rounded-md">
            BOOK
          </button>
          <button
            class="bg-primary text-white rounded-md">
            CANCEL
          </button>
        </div>
      </form>
    </div>
  </div>
</div>