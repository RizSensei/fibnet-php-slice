// mobile responsive navbar
const openSidebar = document.getElementById("open-sidebar");
if (openSidebar) {
  openSidebar.addEventListener("click", function () {
    console.log("open")
    document.getElementById("sidebar").classList.add("show");
  });
}

const closeSidebar = document.getElementById("close-sidebar");
if (closeSidebar) {
  closeSidebar.addEventListener("click", function () {
    console.log("close")
    document.getElementById("sidebar").classList.remove("show");
  });
}

// const closeSidebarBlankRight = document.getElementById(
//   "sidebar-right"
// );
// if (closeSidebarBlankRight) {
//   closeSidebarBlankRight.addEventListener("click", function () {
//     document.getElementById("sidebar").classList.remove("show");
//   });
// }