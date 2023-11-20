document.getElementById("hide-text-btn-1").addEventListener("click", function() {
    var textHidden1 = document.getElementById("text-hidden-1");
    var imgHidden1 = document.getElementById("hidden-img-1");

    textHidden1.classList.toggle("show");

    // Cambia las clases para la animación de rotación
    if (textHidden1.classList.contains("show")) {
        imgHidden1.classList.remove("rotate-up");
        imgHidden1.classList.add("rotate-down");
    } else {
        imgHidden1.classList.remove("rotate-down");
        imgHidden1.classList.add("rotate-up");
    }
});

document.getElementById("hide-text-btn-2").addEventListener("click", function() {
    var textHidden2 = document.getElementById("text-hidden-2");
    var imgHidden2 = document.getElementById("hidden-img-2");

    textHidden2.classList.toggle("show");

    // Cambia las clases para la animación de rotación
    if (textHidden2.classList.contains("show")) {
        imgHidden2.classList.remove("rotate-up");
        imgHidden2.classList.add("rotate-down");
    } else {
        imgHidden2.classList.remove("rotate-down");
        imgHidden2.classList.add("rotate-up");
    }
});


document.getElementById("hide-text-btn-3").addEventListener("click", function() {
    var textHidden3 = document.getElementById("text-hidden-3");
    var imgHidden3 = document.getElementById("hidden-img-3");

    textHidden3.classList.toggle("show");

    // Cambia las clases para la animación de rotación
    if (textHidden3.classList.contains("show")) {
        imgHidden3.classList.remove("rotate-up");
        imgHidden3.classList.add("rotate-down");
    } else {
        imgHidden3.classList.remove("rotate-down");
        imgHidden3.classList.add("rotate-up");
    }
});

document.getElementById("hide-text-btn-4").addEventListener("click", function() {
    var textHidden4 = document.getElementById("text-hidden-4");
    var imgHidden4 = document.getElementById("hidden-img-4");

    textHidden4.classList.toggle("show");

    // Cambia las clases para la animación de rotación
    if (textHidden4.classList.contains("show")) {
        imgHidden4.classList.remove("rotate-up");
        imgHidden4.classList.add("rotate-down");
    } else {
        imgHidden4.classList.remove("rotate-down");
        imgHidden4.classList.add("rotate-up");
    }
});

document.getElementById("hide-text-btn-5").addEventListener("click", function() {
    var textHidden5 = document.getElementById("text-hidden-5");
    var imgHidden5 = document.getElementById("hidden-img-5");

    textHidden5.classList.toggle("show");

    // Cambia las clases para la animación de rotación
    if (textHidden5.classList.contains("show")) {
        imgHidden5.classList.remove("rotate-up");
        imgHidden5.classList.add("rotate-down");
    } else {
        imgHidden5.classList.remove("rotate-down");
        imgHidden5.classList.add("rotate-up");
    }
});
