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
        event.stopPropagation();
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

    // Hide dropdowns when clicking outside
    window.addEventListener('mouseup', function(event) {
        const userDropdown = document.getElementById("userDropdown1");
        const myCartDropdown = document.getElementById("myCartDropdown1");
        if (event.target != userDropdown && event.target.parentNode != userDropdown && event.target.id != "userDropdownButton1") {
            userDropdown.classList.add("hidden");
        }
        if (event.target != myCartDropdown && event.target.parentNode != myCartDropdown && event.target.id != "myCartDropdownButton1") {
            myCartDropdown.classList.add("hidden");
        }
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
                mainSearch.classList.add("")
            } else if (window.scrollY > lastScrollY) {
                mainSearch.classList.remove("")
            }
            lastScrollY = window.scrollY;
        });

        document.getElementById('download-app').addEventListener('click', function() {
            var qrCode = document.getElementById('qr-code');
            qrCode.classList.toggle('hidden');
          });
          
          window.addEventListener('mouseup', function(event) {
            var qrCode = document.getElementById('qr-code');
            if (event.target != qrCode && !qrCode.contains(event.target) && event.target.id != 'download-app') {
              qrCode.classList.add('hidden');
            }
          });