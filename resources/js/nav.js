function toggleDropdown(dropdownId) {
    const dropdowns = document.querySelectorAll('.dropdown-content'); // Select all dropdowns
    const currentDropdown = document.getElementById(dropdownId);

    dropdowns.forEach((dropdown) => {
        if (dropdown !== currentDropdown) {
            dropdown.classList.add("hidden");
        }
    });

    currentDropdown.classList.toggle("hidden");
}

document.addEventListener("DOMContentLoaded", function() {
    // User Dropdown
    const userDropdownButton = document.getElementById("userDropdownButton1");
    userDropdownButton.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent the click event from bubbling up
        const myCartDropdown = document.getElementById("myCartDropdown1");
        if (!myCartDropdown.classList.contains("hidden")) {
            myCartDropdown.classList.add("hidden");
        }
        toggleDropdown("userDropdown1");
    });

    // Item Disukai
    const myCartDropdownButton = document.getElementById("myCartDropdownButton1");
    myCartDropdownButton.addEventListener("click", function(event) {
        event.stopPropagation();
        const userDropdown = document.getElementById("userDropdown1");
        if (!userDropdown.classList.contains("hidden")) {
            userDropdown.classList.add("hidden");
        }
        toggleDropdown("myCartDropdown1");
    });
});

function scrollFunction() {
    const dropdowns = document.querySelectorAll('.dropdown-content'); 
    dropdowns.forEach((dropdown) => {
        dropdown.classList.add("hidden"); 
    });
}

window.onscroll = scrollFunction;

let lastScrollY = window.scrollY;

        window.addEventListener('scroll', function() {
            var mainSearch = document.getElementById('mainsearch');
            var mainNav = document.getElementById('mainnav');

            if (window.scrollY === 0) {
                // Jika berada di ujung atas, tampilkan mainnav
            } else if (window.scrollY > lastScrollY) {
                // Jika scroll ke bawah, tampilkan mainsearch
            }

            // Update posisi scroll terakhir
            lastScrollY = window.scrollY;
        });
