gsap.registerPlugin(ScrollTrigger, ScrollSmoother);


if (!localStorage.getItem("visited2")) {
    setTimeout(() => {
        gsap.utils.toArray(".FadeUp").forEach(elem => {
            gsap.from(elem, {
                scrollTrigger: {
                    trigger: elem,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 1.5
            });
        });
    }, 6000);
    localStorage.setItem("visited2", "true");
} else {
    gsap.utils.toArray(".FadeUp").forEach(elem => {
        gsap.from(elem, {
            scrollTrigger: {
                trigger: elem,
                start: "top 80%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 1.5
        });
    });
}