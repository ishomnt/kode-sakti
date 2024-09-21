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
const modalVideo = document.getElementById("modal-video");
const modalMateri = document.getElementById("modal-materi");
const btnVideo = document.getElementById("btn-video");
const btnMateri = document.getElementById("btn-materi");
const span = document.getElementsByClassName("close")[0];

btnVideo.onclick = function() {
  modalVideo.style.display = "flex";
  setTimeout(() => {
    modalVideo.classList.add('show');
  }, 5);
}

btnMateri.onclick = function() {
  modalMateri.style.display = "flex";
  setTimeout(() => {
    modalMateri.classList.add('show');
  }, 5);
}

span.onclick = function() {
  modal.classList.remove('show');
  setTimeout(() => {
    modal.style.display = "none";
  }, 200);
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.classList.remove('show');
    setTimeout(() => {
      modal.style.display = "none";
    }, 200);
  }
}
