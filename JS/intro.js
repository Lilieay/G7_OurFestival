const intro = document.createElement("video");
const h1 = document.getElementsByTagName("h1")[0];
function prevent(e) {
    e.preventDefault();
}
function disableScrollAll() {
    document.body.style.overflow = "hidden";
    window.addEventListener("wheel", prevent, { passive: false });
    window.addEventListener("touchmove", prevent, { passive: false });
}

function enableScrollAll() {
    document.body.style.overflow = "";
    window.removeEventListener("wheel", prevent);
    window.removeEventListener("touchmove", prevent);
}
if (!localStorage.getItem("visited")) {
    disableScrollAll();
    intro.src = "./resource/index_resource/intro.mp4";
    intro.className = "intro";
    intro.autoplay = true;
    intro.muted = true;
    document.body.appendChild(intro);
    setTimeout(() => {
        intro.classList.add("out");
    }, 6000);
    setTimeout(() => {
        intro.remove();
        enableScrollAll();
    }, 6500);
    localStorage.setItem("visited", "true");
} else {

}


