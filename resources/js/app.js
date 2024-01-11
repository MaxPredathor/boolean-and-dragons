import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const buttons = document.querySelectorAll(".cancel-button");

buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const dataTitle = button.getAttribute("data-item-title");
        const modal = new bootstrap.Modal("#deleteModal");
        modal.show();

        const title = document.querySelector("#modal-item-title");
        title.textContent = dataTitle;

        const confirm = document.querySelector(".confirm-cancel");
        confirm.addEventListener("click", (e) => {
            document.getElementById("delete-form").submit();
        });
    });
});
