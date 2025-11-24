gsap.registerPlugin(SplitText, ScrollTrigger);

document.fonts.ready.then(() => {

    document.querySelectorAll(".TextSplit").forEach((elem) => {
        let split = new SplitText(elem, {
            type: "words",
            wordsClass: "word"
        });
        gsap.from(split.words, {
            scrollTrigger: {
                trigger: elem,
                start: "top 80%",
                toggleActions: "play none none none",
            },
            y: -50,
            autoAlpha: 0,
            stagger: {
                amount: 1,
                from: "random",
            },
            ease: "power2.out",
            duration: 0.8
        });

    });

});

let split2 = new SplitText(".TextSplit2", {
    type:"chars",
    charsClass: "char2",
    
});

gsap.from(split2.chars, {
            scrollTrigger: {
                trigger: ".TextSplit2",
                start: "top 80%",
                toggleActions: "play none none none",
            },
            y:0,
            autoAlpha: 0,
            stagger: {
                amount: 1,
                from: "start",
            },
            ease: "power2.out",
            duration: 1.5
        });
//
let splitline1 = new SplitText(".TextSplitLine1", {
    type:"lines",
    linesClass: "line1",
    
});

gsap.from(splitline1.lines, {
            scrollTrigger: {
                trigger: ".TextSplitLine1",
                start: "top 80%",
                toggleActions: "play none none none",
            },
            y:0,
            autoAlpha: 0,
            stagger: {
                amount: 1,
                from: "start",
            },
            ease: "power2.out",
            duration: 1.5
        });
//
let splitline2 = new SplitText(".TextSplitLine2", {
    type:"lines",
    linesClass: "line2",
    
});

gsap.from(splitline2.lines, {
            scrollTrigger: {
                trigger: ".TextSplitLine2",
                start: "top 80%",
                toggleActions: "play none none none",
            },
            y:0,
            autoAlpha: 0,
            stagger: {
                amount: 1,
                from: "start",
            },
            ease: "power2.out",
            duration: 3
        });
