document.addEventListener('DOMContentLoaded', () => {
    window.history.scrollRestoration = "manual";
    window.scrollTo(0, 0);
    window.addEventListener("load", function(e){

    gsap.registerPlugin(ScrollTrigger);

    const tl = gsap.timeline({
        scrollTrigger:{
            trigger:".container",
            start:"center center",
            end: "+=2000",
            scrub: 1,
            pin:".container",
            // markers:true,
        }
    });
    tl.from(".card1", { x: "-100vw",y: "50%",opacity:0, duration: 0.4 })
    .to(".card1",   { x: "50%",y: "50%", opacity:1,  duration: 0.4 }) // elle sort

    .from(".card2", { x: "-100vw",y: "50%",opacity:0,  duration: 0.4 })
    .to(".card2",   { x: "50%",y: "50%",opacity:1, duration: 0.4 })

    .from(".card3", { x: "-100vw",y: "50%",opacity:0, duration: 1 })
    .to(".card3",   { x: "50%",y: "50%",opacity:1,  duration: 1 });

    }, false);
    
})