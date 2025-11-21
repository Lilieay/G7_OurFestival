gsap.registerPlugin(ScrollTrigger , ScrollSmoother);



gsap.utils.toArray(".FadeUp").forEach(elem => {
    gsap.from(elem, {
        scrollTrigger: {
            trigger: elem,
            start: "top 80%",
            toggleActions: "play none none none"
        },
        y: 50,
        opacity: 0,
        duration: 1
    });
});

ScrollTrigger.create({
    trigger: "#header",
})