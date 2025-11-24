gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
const pop = document.querySelector(".PopUp");

gsap.utils.toArray(".PopUp").forEach(elem => {
    elem.addEventListener("mouseenter", () => {
        gsap.to(elem, {
            scale: 1.2,
            y: -100,
            duration: 0.4,
            ease: "power3.out"
        });
    });

    elem.addEventListener("mouseleave", () => {
    gsap.to(elem, {
        scale: 1,
        y: 0,
        duration: 0.6,
        ease: "power3.inOut"
    });
});
});




/*
const tl = gsap.timeline();
tl.from(".book" ,{
    y: -5000,
    duration: 3
});
tl.to(".book",{

});*/
