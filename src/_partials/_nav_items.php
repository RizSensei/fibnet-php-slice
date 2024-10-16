<ul
    id="nav_ul"
    class="list-none text-sm flex flex-col lg:flex-row gap-5">
    <script>
        let nav_items = navItems
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