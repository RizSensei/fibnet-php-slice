<?php
function renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label) {
    echo '
    <div class="h-72 w-full relative">
        <img
            src="/fibnet/public/images/Header-Background.jpg"
            alt=""
            class="h-full w-full object-cover" />
        <div class="absolute bg-black bg-opacity-50 inset-0 h-full w-full">
            <div class="h-full w-full flex flex-col items-center justify-center">
                <h1 data-aos="fade-up" class="text-white text-center">' . htmlspecialchars($label) . '</h1>
                <p class="mt-5 text-gray-300 text-xs font-medium">
                    <a
                        href="/fibnet/src/index.php"
                        class="hover:text-white transform ease-in-out duration-150">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                    <a
                        href='. htmlspecialchars($parent_label_href) .'
                        class="hover:text-white transform ease-in-out duration-150">' . htmlspecialchars($parent_label) . '</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                    <span class="text-white italic">' . htmlspecialchars($label) . '</span>
                </p>
            </div>
        </div>
    </div>';
}
?>

<script>
  AOS.init();
</script>