document.addEventListener("DOMContentLoaded", function() {
    const warningModal = document.getElementById("warning-modal");
    const continueButton = document.getElementById("continue-button");
    const exitButton = document.getElementById("exit-button");
    const gallery = document.getElementById("gallery");

    continueButton.addEventListener("click", function() {
        warningModal.style.display = "none";
        loadImages();
    });

    exitButton.addEventListener("click", function() {
        window.close();
    });

    function loadImages() {
        images.forEach(image => {
            const card = document.createElement("div");
            card.className = "card";
            const img = document.createElement("img");
            img.src = image;
            card.appendChild(img);
            gallery.appendChild(card);
        });
    }
});