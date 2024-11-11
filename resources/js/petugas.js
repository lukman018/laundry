document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById("header-toggle");
    const navBar = document.getElementById("nav-bar");
    const bodyPadding = document.getElementById("body-pd");
    const headerPadding = document.getElementById("header");

    // Fungsi untuk menampilkan sidebar
    const showNavbar = () => {
        navBar.classList.toggle("show");
        toggleButton.classList.toggle("bx-x");
        bodyPadding.classList.toggle("body-pd");
        headerPadding.classList.toggle("body-pd");
    };

    // Tambahkan event listener untuk tombol toggle
    if (toggleButton){
        toggleButton.addEventListener("click", showNavbar);
    }
});
