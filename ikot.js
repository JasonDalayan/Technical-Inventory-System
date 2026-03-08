document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const loader = document.getElementById("loader");

    // Hide the loader initially
    loader.classList.add("hidden");

    // Show the loader when the form is submitted
    form.addEventListener("submit", function(event) {
        loader.classList.remove("hidden"); // Show the loader
    });
});