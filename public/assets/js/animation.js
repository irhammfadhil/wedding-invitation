
document.addEventListener('DOMContentLoaded', function() {
  const elements = document.querySelectorAll('#a, #b, #c, #d, #e'); // Select all target elements

  function checkVisibility() {
    elements.forEach(el => {
      // Check if the element is visible in the viewport
      if (el.getBoundingClientRect().top < window.innerHeight) {
        el.classList.add('fade-in'); // Add the class to fade the element in
      }
    });
  }

  window.addEventListener('scroll', checkVisibility);
  checkVisibility(); // Initial check on load
});
