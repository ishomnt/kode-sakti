// Function to add or remove blur on scroll
window.onscroll = function () {
    var navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        // Change 50 to the number of pixels you want before the effect is triggered
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};
