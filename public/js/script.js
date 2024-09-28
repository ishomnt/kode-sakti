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
const modalQuiz = document.getElementById("modal-quiz");
const btnVideo = document.getElementById("btn-video");
const btnMateri = document.getElementById("btn-materi");
const btnQuiz = document.getElementById("btn-quiz");
const span = document.getElementsByClassName("close")[0];
const spanMateri = document.getElementsByClassName("close1")[0];
const spanQuiz = document.getElementsByClassName("close2")[0];

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

btnQuiz.onclick = function() {
  modalQuiz.style.display = "flex";
  setTimeout(() => {
    modalQuiz.classList.add('show');
  }, 5);
}

span.onclick = function() {
  modalVideo.classList.remove('show');
  setTimeout(() => {
    modalVideo.style.display = "none";
  }, 200);
}

spanMateri.onclick = function() {
  modalMateri.classList.remove('show');
  setTimeout(() => {
    modalMateri.style.display = "none";
  }, 200);
}
spanQuiz.onclick = function() {
  modalQuiz.classList.remove('show');
  setTimeout(() => {
    modalQuiz.style.display = "none";
  }, 200);
}

window.onclick = function(event) {
  if (event.target == modalVideo || event.target == modalMateri || event.target == modalQuiz) {
    modalVideo.classList.remove('show');
    modalMateri.classList.remove('show');
    modalQuiz.classList.remove('show');
    setTimeout(() => {
        modalVideo.style.display = "none";
        modalMateri.style.display = "none";
        modalQuiz.style.display = "none";
    }, 200);
  }
}
