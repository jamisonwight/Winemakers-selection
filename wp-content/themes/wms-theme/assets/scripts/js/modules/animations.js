import {gsap} from "gsap"
import {ScrollTrigger} from "gsap/ScrollTrigger"

gsap.config({
  nullTargetWarn: false,
  trialWarn: false,
});

gsap.set('.null', {opacity: 1})
gsap.registerPlugin(ScrollTrigger);

const animate_me = gsap.utils.toArray('.animate');
gsap.set(animate_me, {autoAlpha: 0, y: 100});
animate_me.forEach((the_box, i) => {
  const anim = gsap.to(the_box, {duration: 0.25, autoAlpha: 1, y: 0, paused: true});
ScrollTrigger.create({
    trigger: the_box,
    end: "top top",
    once: false,
    scrub: 0.1,
    onEnter: self => {
      self.progress === 1 ? anim.progress(1) : anim.play()
    }
  });
});

// Parallax sections
gsap.registerPlugin(ScrollTrigger);

let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);
gsap.utils.toArray("div").forEach((section, i) => {
  section.bg = section.querySelector(".parallax"); 
  gsap.fromTo(section.bg, {
    backgroundPosition: () => i ? `50% ${-window.innerHeight * getRatio(section)}px` : "50% 0"
  }, {
    backgroundPosition: () => `50% ${window.innerHeight * (1 - getRatio(section))}px`,
    ease: "none",
    scrollTrigger: {
      trigger: section,
      start: () => i ? "top bottom" : "top top", 
      end: "bottom top",
      scrub: 0.1,
      invalidateOnRefresh: true,
    }
  });

});