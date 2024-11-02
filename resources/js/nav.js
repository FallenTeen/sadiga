document.addEventListener("DOMContentLoaded", function () {
    const isLoggedIn = document.body.dataset.loggedIn === "true";
    const likedItemsModal = document.getElementById("likedItemsModal");
    const closeModalButton = document.getElementById("closeModalButton");
    const closeModalButtonBottom = document.getElementById(
        "closeModalButtonBottom"
    );

    function toggleDropdown(dropdownId) {
        const dropdowns = document.querySelectorAll(".dropdown-content");
        const currentDropdown = document.getElementById(dropdownId);

        dropdowns.forEach((dropdown) => {
            if (dropdown !== currentDropdown) {
                dropdown.classList.add("hidden");
            }
        });

        if (currentDropdown) {
            currentDropdown.classList.toggle("hidden");
        }
    }

    if (isLoggedIn) {
        const userDropdownButton = document.getElementById(
            "userDropdownButton1"
        );
        const userDropdown = document.getElementById("userDropdown1");

        if (userDropdownButton) {
            userDropdownButton.addEventListener("click", function (event) {
                event.stopPropagation();
                toggleDropdown("userDropdown1");
            });
        }
    }

    const myCartDropdownButton = document.getElementById(
        "myCartDropdownButton1"
    );

    if (myCartDropdownButton) {
        myCartDropdownButton.addEventListener("click", function (event) {
            event.stopPropagation();
            toggleDropdown("likedItemsModal");
        });
    }

    const downloadAppButton = document.getElementById("download-app");
    const qrCode = document.getElementById("qr-code");

    if (downloadAppButton) {
        downloadAppButton.addEventListener("click", function () {
            qrCode.classList.toggle("hidden");
        });
    }

    // Close modal when clicking outside
    window.addEventListener("mouseup", function (event) {
        if (
            qrCode &&
            event.target !== qrCode &&
            !qrCode.contains(event.target) &&
            event.target.id !== "download-app"
        ) {
            qrCode.classList.add("hidden");
        }

        const userDropdown = document.getElementById("userDropdown1");
        const dropdownMenu = document.getElementById("dropdownMenu");

        if (
            isLoggedIn &&
            userDropdown &&
            event.target !== userDropdown &&
            !userDropdown.contains(event.target) &&
            event.target.id !== "userDropdownButton1"
        ) {
            userDropdown.classList.add("hidden");
        }

        if (
            likedItemsModal &&
            event.target !== likedItemsModal &&
            !likedItemsModal.contains(event.target) &&
            event.target.id !== "myCartDropdownButton1"
        ) {
            likedItemsModal.classList.add("hidden");
        }

        if (
            dropdownMenu &&
            event.target !== dropdownMenu &&
            !dropdownMenu.contains(event.target) &&
            event.target.id !== "dropdownButton"
        ) {
            dropdownMenu.classList.add("hidden");
        }
    });

    // Function to close modal
    function closeModal() {
        likedItemsModal.classList.add("hidden");
    }

    // Close modal when clicking "X" button
    if (closeModalButton) {
        closeModalButton.addEventListener("click", closeModal);
    }

    // Close modal when clicking "Tutup" button
    if (closeModalButtonBottom) {
        closeModalButtonBottom.addEventListener("click", closeModal);
    }

    function scrollFunction() {
        const dropdowns = document.querySelectorAll(".dropdown-content");
        dropdowns.forEach((dropdown) => {
            dropdown.classList.add("hidden");
        });
    }
    window.onscroll = scrollFunction;

    let lastScrollTop = 0;
    const mainNav = document.getElementById("mainnav");
    mainNav.style.transition = "transform 0.3s ease-in-out";

    window.addEventListener("scroll", function () {
        let scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            mainNav.style.transform = "translateY(-100%)";
        } else {
            mainNav.style.transform = "translateY(0)";
        }

        lastScrollTop = scrollTop;
    });
});
