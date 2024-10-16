const openMobileNavButton = document.getElementById("open-mobile-nav");
const closeMobileNavButton = document.getElementById("close-mobile-nav");
const closeMobileNavBlankRight = document.getElementById("mobile-sidebar-right");
const mobileSidebar = document.getElementById("mobile-sidebar");

if (openMobileNavButton) {
    
  openMobileNavButton.addEventListener("click", function () {
    mobileSidebar.classList.add("show");
  });
}

if (closeMobileNavButton) {
  closeMobileNavButton.addEventListener("click", function () {
    mobileSidebar.classList.remove("show");
  });
}

if (closeMobileNavBlankRight) {
  closeMobileNavBlankRight.addEventListener("click", function () {
    mobileSidebar.classList.remove("show");
  });
}
