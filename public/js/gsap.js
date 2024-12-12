document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".product-card", {
    scrollTrigger: {
      trigger: ".products-container", // The element to trigger the animation
      start: "top 80%", // Trigger when the top of the container hits 80% of the viewport
      end: "bottom 20%", // End trigger position
      toggleActions: "play none none none", // Play animation once
    },
    opacity: 0, // Fade in
    y: 50, // Move up by 50px
    stagger: 0.3, // Stagger animation
    duration: 1, // Animation duration
    ease: "power3.out", // Smooth easing
  });
});

document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".blog-card-container", {
    scrollTrigger: {
      trigger: ".blogs-container", // The element to trigger the animation
      start: "top 80%", // Trigger when the top of the container hits 80% of the viewport
      end: "bottom 20%", // End trigger position
      toggleActions: "play none none none", // Play animation once
    },
    opacity: 0, // Fade in
    y: 50, // Move up by 50px
    stagger: 0.3, // Stagger animation
    duration: 1, // Animation duration
    ease: "power3.out", // Smooth easing
  });
});

document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".service-card", {
    scrollTrigger: {
      trigger: ".service-container", // The element to trigger the animation
      start: "top 80%", // Trigger when the top of the container hits 80% of the viewport
      end: "bottom 20%", // End trigger position
      toggleActions: "play none none none", // Play animation once
    },
    opacity: 0, // Fade in
    y: 50, // Move up by 50px
    stagger: 0.3, // Stagger animation
    duration: 1, // Animation duration
    ease: "power3.out", // Smooth easing
  });
});
