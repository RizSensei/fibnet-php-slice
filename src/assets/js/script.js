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

  // setting timeout of 500ms for popup card to appear
  setTimeout(function () {
    $("#popup-card").fadeIn();
  }, 1000);

  // event listener to close the popup card
  $("#popup-card-close").click(function () {
    $("#popup-layout").hide().fadeOut(500);
  });


  const packageButtons = document.querySelectorAll(".button-style");

  packageButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      packageButtons.forEach(function (btn) {
        btn.classList.remove("package-btn-active");
      });
      this.classList.add("package-btn-active");
    });
  });