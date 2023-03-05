let bgHero = document.querySelector(".hero img");
let textHero = document.querySelector(".captionText");
window.addEventListener("scroll", function () {
    let e = window.scrollY;
    (bgHero.style.top = 0.5 * e + "px"), (textHero.style.top = -1 * e + "px");
});
