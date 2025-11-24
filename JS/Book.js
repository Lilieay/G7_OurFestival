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
let mm = gsap.matchMedia();


const book1 = document.getElementById("book1");
const book2 = document.getElementById("book2");
const book3 = document.getElementById("book3");

const rect1 = book1.getBoundingClientRect();
const rect2 = book2.getBoundingClientRect();
const rect3 = book3.getBoundingClientRect();

const dx_1 = rect2.left - rect1.left;
const dy_1 = rect2.top - rect1.top;
const dx_2 = rect2.left - rect3.left;
const dy_2 = rect2.top - rect3.top;

const tl = gsap.timeline({
    scrollTrigger: {
        trigger: "#book1",
        start: "top 80%",
        toggleActions: "play none none none"
    }
});


mm.add("(max-width: 768px)", () => {
    gsap.from("#book1", {
        scrollTrigger: {
            trigger: "#book1",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        x: -60,
        opacity: 0,
        duration: 0.5
    });
    gsap.from("#book2", {
         scrollTrigger: {
            trigger: "#book2",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        x: 60,
        opacity: 0,
        duration: 0.5
    });
    gsap.from("#book3", {
         scrollTrigger: {
            trigger: "#book3",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        x: -60,
        opacity: 0,
        duration: 0.5
    });
});

mm.add("(min-width: 769px)", () => {
    tl.from(book1, {
        y: "+=" + dy_1,
        x: "+=" + dx_1,
        duration: 0.5
    })
        .from(book3, {
            y: "+=" + dy_2,
            x: "+=" + dx_2,
            duration: 0.5
        })
});



/*const tl = gsap.timeline();
tl.from(".book" ,{
    y: -5000,
    duration: 3
});
tl.to(".book",{

});*/
