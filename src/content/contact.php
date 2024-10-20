<!-- page banner  -->
<?php
include '_partials/_page_banner.php';
echo pageBannerComponent('Contact Us');
?>
<!-- page banner  -->

<div class="mt-10 px-5 sm:px-10 xl:px-40 2xl:px-44">
    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="h-[450px] w-full">
            <img
                src="<?= $path ?>/assets/images/encode_building.png"
                alt="Encode Building"
                class="w-80 lg:w-96 h-full object-cover" />
        </div>
        <div>
            <form action="#">
                <h1 class="text-2xl font-semibold text-neutral-900">
                    Send Message To Us
                </h1>
                <div class="mt-5 flex flex-col gap-3 text-neutral-800">
                    <input
                        type="text"
                        class="form-input input-style"
                        placeholder="Full Name*" />
                    <input
                        type="text"
                        class="form-input input-style"
                        placeholder="Email Address*" />
                    <input type="text" class="form-input" placeholder="Subject" />
                    <textarea
                        name=""
                        id=""
                        class="form-textarea input-style"
                        placeholder="Message"
                        rows="5"></textarea>
                </div>
                <button
                    class="mt-5 button-style bg-primary text-white rounded-md">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    <div class="mt-10 mb-10">
        <h1 class="text-2xl font-semibold text-neutral-900">
            We'd love to get your feedback
        </h1>
        <div class="mt-10 px-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                <div class="flex flex-col items-center text-center gap-3">
                    <div
                        class="h-16 w-16 flex flex-col items-center justify-center rounded-full shadow-md shadow-primary text-primary text-lg">
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
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium">Location</h3>
                        <h4 class="mt-1 text-sm break-words">
                            Thadodhunga,Dhobighat,Indira bhawan 3rd floor
                        </h4>
                    </div>
                </div>
                <div class="flex flex-col items-center text-center gap-3">
                    <div
                        class="h-16 w-16 flex flex-col items-center justify-center rounded-full shadow-md shadow-primary text-primary text-lg">
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
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium">Phone Number</h3>
                        <h4 class="mt-1 text-sm break-words">
                            +977 01-5910971, <br />+977 01-5910972
                        </h4>
                    </div>
                </div>
                <div class="flex flex-col items-center text-center gap-3">
                    <div
                        class="h-16 w-16 flex flex-col items-center justify-center rounded-full shadow-md shadow-primary text-primary text-lg">
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
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium">Working Hours</h3>
                        <h4 class="mt-1 text-sm break-words">Sun-Fri | 7AM TO 7PM</h4>
                    </div>
                </div>
                <div class="flex flex-col items-center text-center gap-3">
                    <div
                        class="h-16 w-16 flex flex-col items-center justify-center rounded-full shadow-md shadow-primary text-primary text-lg">
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
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium">Email</h3>
                        <h4 class="mt-1 text-sm break-words">info@encode.com.np</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>