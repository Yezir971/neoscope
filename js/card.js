document.addEventListener('DOMContentLoaded', () => {
  gsap.registerPlugin(ScrollTrigger);

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".container",
      start: "+=2000",
      end: "+=2000", // ✅ durée étendue pour animer progressivement
      scrub: true,   // ✅ animation synchronisée au scroll
      pin: true,
      markers: true
    }
  });

  tl.to(".card1", { x: 400, rotation: 364, duration: 0.5 })
    .to(".card2", { x: 400, rotation: 357, duration: 0.5 })
    .to(".card3", { x: 400, rotation: 370, duration: 0.5 })
    .to(".card4", { x: 400, rotation: 369, duration: 0.5 });
});
