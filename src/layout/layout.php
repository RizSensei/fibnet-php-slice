<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head includes meta, scripts and styles link  -->
    <?php
    include '_partials/_head.php';
    ?>
</head>

<body class="relative h-full w-full min-h-screen">
    <div class="flex flex-col min-h-screen">

        <!-- topbar  -->
        <?php
        include '_partials/_topbar.php';
        ?>
        <!-- navbar  -->
        <?php
        include '_partials/_navbar.php';
        ?>
        <!-- sidebar  -->
        <?php
        include '_partials/_sidebar.php';
        ?>

        <div class="flex-grow">
            <!-- content area  -->
            <?php include $content; ?>
        </div>


        <!-- footer -->
        <?php
        include '_partials/_footer.php';
        ?>
    </div>
</body>

</html>