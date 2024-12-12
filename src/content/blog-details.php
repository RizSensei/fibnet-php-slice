<?php
include './_partials/_breadcrumb_header.php';
$parent_label = "Blogs";
$parent_label_href = "/fibnet/src/blog.html";
$label = "Don’t Miss Your Favorite Matches As We Stream Them Online
";
renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label);
?>

<section
    class="w-full px-5 sm:px-10 lg:px-20 2xl:px-32 py-10 grid grid-cols-1 md:grid-cols-3 gap-5">
    <?php
    include '_partials/_side_blog_component.php';
    ?>

    <div class="col-span-2 flex flex-col order-1 md:order-2">
        <div class="h-96 w-full rounded-xl overflow-hidden"><img src="https://wdtnetlink.wpengine.com/wp-content/uploads/2023/08/blog-11.jpg" alt="" class="h-full w-full object-cover"></div>

        <div class="pt-5 pb-5 flex flex-col sm:flex-row gap-2 justify-between border-bottom">
            <span class="text-dark-blue font-semibold">August 31, 2024</span>
            <span>By <span class="text-dark-blue font-semibold">Rohan Bajracharya</span></span>
        </div>

        <div class="mt-5">
            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quasi error reprehenderit, hic delectus quo sapiente mollitia dolorum dignissimos tempore, nesciunt magnam odit, eius aspernatur ad aut perspiciatis ipsa! Enim pariatur non autem sapiente! Hic ea cumque similique consequuntur consequatur assumenda reprehenderit eligendi quisquam laborum, iusto velit asperiores, possimus perferendis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quas voluptatum quia, veritatis cupiditate voluptates vero fuga odio illo eligendi consectetur eveniet excepturi perspiciatis assumenda, laudantium unde doloremque culpa? Beatae neque modi nulla laboriosam? Qui aliquid in rem eaque corrupti eos repudiandae fugiat, voluptatibus tempora nemo impedit, rerum doloremque saepe nesciunt iusto! Tempore quia dolor debitis praesentium esse, minus quam consequatur eligendi ex impedit non at, reprehenderit cumque blanditiis neque aspernatur eos placeat dignissimos totam! Porro, qui molestias magnam animi blanditiis necessitatibus temporibus quam nobis! Aut sint, voluptatem autem quaerat ea aspernatur cupiditate delectus est perspiciatis temporibus, laborum nam voluptates dicta. Sint molestias, dolore soluta labore amet sequi repellat fugit dicta consequuntur velit doloribus consectetur magni commodi nesciunt. Quod labore quibusdam explicabo minima odio officiis ab non repudiandae laboriosam dolorum, iusto provident nihil placeat necessitatibus eveniet in officia vero laborum reiciendis molestias aspernatur corrupti! Repellat placeat cum nihil voluptas eius!
            </p>
        </div>
    </div>
</section>