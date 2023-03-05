window.addEventListener("scroll", reveal);

function reveal() {
    let reveals = document.querySelectorAll(".reveal");
    for (let index = 0; index < reveals.length; index++) {
        let windowheight = window.innerHeight;
        let revealtop = reveals[index].getBoundingClientRect().top;
        let revealpoint = 200;

        if (revealtop < windowheight - revealpoint) {
            reveals[index].classList.add("active");
        } else {
            reveals[index].classList.remove("active");
        }
    }
}
