var tl = gsap.timeline({
  scrollTrigger: {
    trigger: "#About",
    start: "50% 50%",
    end: "100% 50%",
    scrub: true,
    pin: true
  }
});

tl.to("#top", {
  top: "-50%",
}, 'a')
.to("#bottom", {
  bottom: "-50%",
}, 'a')
.to("#top-h", {
  top: "-80%",
}, 'a')
.to("#bot-h", {
  bottom: "-80%",
}, 'a');

var tl1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".part-1",
    start: "50% 50%",
    end: "150% 50%",
    scrub: true,
    pin: true,
  }
});

tl1.to(".top-content", {
  rotateX: "110deg",
  opacity: 0,
  duration: 2,
}, 'x')
.to(".btm-content", {
  rotateX: "-110deg",
  opacity: 0,
  duration: 2,
}, 'x')
.to(".img", {
  width: "75%",
  height: "75%",
  borderRadius: "0%",
  duration: 7,
}, '+=0.1');

var tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".p-2",
    start: "0% 90%",
    end: "150% 90%",
    scrub: true,
  }
});

tl2.to(".strip-l", {
  marginLeft: "0%",
}, 's')
.to(".strip-r", {
  marginLeft: "-100%",
}, 's');

var ts = gsap.timeline({
  scrollTrigger: {
    trigger: "#serviecs",
    start: "35% 50%",
    end: "100% 50%",
    scrub: 2,
    pin: true
  }
});

ts.to(".serviecs-text", {
  top: "-7%",
  opacity: 0,
  display: "none"
}, '+=0.1')
.to("#card-1", {
  top: "35%",
}, '+=0.1')
.to("#card-2", {
  top: "130%",
}, '+=0.1')
.to("#card-2", {
  top: "42%",
}, '+=0.1')
.to("#card-1", {
  opacity: 0,
  display: "none"
}, '+=0.1')
.to("#card-1", {
  width: "40%",
  height: "40vh",
}, '+=0.1')
.to("#card-3", {
  top: "130%",
}, '+=0.1')
.to("#card-3", {
  top: "50%",
}, '+=0.1')
.to("#card-2", {
  width: "40%",
  height: "40vh",
}, '+=0.1')
.to("#card-2", {
  opacity: 0,
  display: "none"
}, '+=0.1');
