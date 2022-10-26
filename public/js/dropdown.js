
/* Dropdown */
document.getElementById("UserDropdown").classList.remove("show");
document.getElementById("GalaxiesDropdown").classList.remove("show");


function showGalaxiesDropdown() {
    document.getElementById("GalaxiesDropdown").classList.toggle("show");
}

function showUserDropdown() {
    document.getElementById("UserDropdown").classList.toggle("show");
}

function removeUserDropdown() {
    document.getElementById("UserDropdown").classList.remove("show");
}

function removeGalaxiesDropdown() {
    document.getElementById("GalaxiesDropdown").classList.remove("show");
}