document.addEventListener("DOMContentLoaded", function() {
    var imageElement = document.getElementById("me-img");
    var imageIndex = 1;
    var imageArray = ["images/homepage/em.jpg", "images/homepage/em1.jpg", "images/homepage/em2.jpg"];

    setInterval(function() {
        imageElement.src = imageArray[imageIndex];
        imageIndex = (imageIndex + 1) % imageArray.length;
    }, 3000);
});
