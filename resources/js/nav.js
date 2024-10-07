function toggleDropdown(dropdownId) {
    const dropdowns = document.querySelectorAll(".dropdown-content"); // Select all dropdowns
    const currentDropdown = document.getElementById(dropdownId);

    dropdowns.forEach((dropdown) => {
        if (dropdown !== currentDropdown) {
            dropdown.classList.add("hidden");
        }
    });

    currentDropdown.classList.toggle("hidden");
}

function scrollFunction() {
    const dropdowns = document.querySelectorAll(".dropdown-content");
    dropdowns.forEach((dropdown) => {
        dropdown.classList.add("hidden");
    });
}

// Hilangin Navbar pas discroll
let lastScrollTop = 0;
const mainNav = document.getElementById("mainnav");
mainNav.style.transition = "transform 0.3s ease-in-out";

window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        mainNav.style.transform = "translateY(-100%)";
    } else {
        mainNav.style.transform = "translateY(0)";
    }

    lastScrollTop = scrollTop;
});

document.addEventListener("DOMContentLoaded", function () {
    const userDropdownButton = document.getElementById("userDropdownButton1");
    userDropdownButton.addEventListener("click", function (event) {
        event.stopPropagation();
        const userDropdown = document.getElementById("userDropdown1");
        toggleDropdown(userDropdown);
    });
    const modal = document.getElementById("likedItemsModal");
    const openModalButton = document.getElementById("myCartDropdownButton1");
    const closeModalButton = document.getElementById("closeModalButton");
    const closeModalButtonBottom = document.getElementById(
        "closeModalButtonBottom"
    );

    openModalButton.addEventListener("click", function (event) {
        event.stopPropagation();
        toggleModal(modal);
    });

    closeModalButton.addEventListener("click", function () {
        closeModal(modal);
    });

    closeModalButtonBottom.addEventListener("click", function () {
        closeModal(modal);
    });
    const downloadAppButton = document.getElementById("download-app");
    const qrCode = document.getElementById("qr-code");

    downloadAppButton.addEventListener("click", function (event) {
        event.stopPropagation();
        toggleQR(qrCode);
    });
    window.addEventListener("mouseup", function (event) {
        const userDropdown = document.getElementById("userDropdown1");
        const myCartDropdown = document.getElementById("myCartDropdown1");
        if (
            !event.target.closest("#userDropdown1") &&
            event.target.id !== "userDropdownButton1"
        ) {
            userDropdown.classList.add("hidden");
        }
        if (
            !event.target.closest("#likedItemsModal") &&
            event.target.id !== "myCartDropdownButton1"
        ) {
            closeModal(modal);
        }
        if (
            event.target !== qrCode &&
            !qrCode.contains(event.target) &&
            event.target.id !== "download-app"
        ) {
            qrCode.classList.add("hidden");
        }
    });
    function toggleDropdown(dropdown) {
        if (dropdown.classList.contains("hidden")) {
            dropdown.classList.remove("hidden");
        } else {
            dropdown.classList.add("hidden");
        }
    }
    function toggleModal(modal) {
        modal.classList.toggle("hidden");
    }
    function closeModal(modal) {
        modal.classList.add("hidden");
    }
    function toggleQR(qrCodeElement) {
        qrCodeElement.classList.toggle("hidden");
    }
});
