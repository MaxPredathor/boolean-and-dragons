import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const buttons = document.querySelectorAll(".cancel-button");

buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        const dataTitle = button.getAttribute("data-item-title");
        const modal = document.getElementById("deleteModal");

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
        const title = document.getElementById("modal-item-title");
        title.textContent = dataTitle;
        const buttonDelete = modal.querySelector("button.my-btn-hover");
        buttonDelete.addEventListener("click", (event) => {
            button.parentElement.submit();
        });
    });
});

const previewImage = document.getElementById("image");
previewImage.addEventListener("change", (event) => {
    const ofReader = new FileReader();
    ofReader.readAsDataURL(previewImage.files[0]);

    ofReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
});

// const login = document.getElementById("loginButton");
// const loginAudio = new Audio("/images/audio/login-audio.mp3");
// login.addEventListener("click", (event) => {
//     setTimeout(function () {
//         loginAudio.play();
//     }, 500);
// });
