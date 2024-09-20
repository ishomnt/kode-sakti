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

// Get modal element
const modal = document.getElementById("myModal");

// Get button that opens the modal
const btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal with a transition
btn.onclick = function() {
  modal.style.display = "block";  // First, make it display:block
  setTimeout(() => { // Add show class after a slight delay to allow transition
    modal.classList.add('show');
  }, 5); // Short delay to ensure transition triggers
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.classList.remove('show');  // Remove the show class
  setTimeout(() => {
    modal.style.display = "none";  // Hide after transition is complete
  }, 200); // Match the CSS transition time
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.classList.remove('show');
    setTimeout(() => {
      modal.style.display = "none";
    }, 200);
  }
}
