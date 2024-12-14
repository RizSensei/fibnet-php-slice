<?php
include './_partials/_breadcrumb_header.php';
$parent_label = "Product";
$parent_label_href = "/fibnet/src/products.html";
$label = "Tiahan Fiber Optics Cable";
renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label);
?>

<?php
$tiahanFiberOpticsCableImages = [
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-16_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-17_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-18_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-19_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-20_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-21_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-22_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-23_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-24_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-25_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-26_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-27_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-28_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-29_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-30_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-31_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-32_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-33_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-34_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-35_orig.jpg",
    "/fibnet/public/images/Tiahan Fiber Optics Cable/1-product-catalog-optical-fiber-cable-page-36_orig.jpg",
];
?>

<?php
    function renderSplideSlider($images, $sliderId, $isThumbnail = false)
    {
        $class = $isThumbnail ? 'mt-5 splide' : 'splide bg-gray-100';
        $imageClass = $isThumbnail ? '' : 'h-full w-full object-contain';
        echo '<div id="' . htmlspecialchars($sliderId) . '" class="' . htmlspecialchars($class) . '">
            <div class="splide__track">
                <ul class="splide__list">';
        foreach ($images as $image) {
            echo '<li class="splide__slide">
                    <img src="' . htmlspecialchars($image) . '" class="' . htmlspecialchars($imageClass) . '">
                </li>';
        }
        echo '</ul>
            </div>
        </div>';
    }
?>

<section class="w-full px-5 sm:px-10 lg:px-20 2xl:px-32 py-10">
    <?php
    renderSplideSlider($tiahanFiberOpticsCableImages, "main-slider");
    renderSplideSlider($tiahanFiberOpticsCableImages, "thumbnail-slider", true);
    ?>
</section>