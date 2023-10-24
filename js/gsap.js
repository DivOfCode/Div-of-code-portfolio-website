var tl = gsap.timeline({ //its for about opening container
  scrollTrigger:{
    trigger: "#About",
    markers: true,
    start: "50% 50%",
    end: "100% 50%",
    scrub: true,
    pin: true
  }
});

tl.
to("#top", {
  top: "-50%"
},'a')
.to("#bottom", {
  bottom: "-50%"
},'a')
.to("#top-h", {
  top: "-80%"
},'a')
.to("#bot-h", {
  bottom: "-80%"
},'a'); 

var tl1 = gsap.timeline({scrollTrigger:{  //its for text rotate
  trigger:".part-1",
  start:"50% 50%",
  end:"150% 50%",
  markers: true,
  scrub: true,
  pin: true, 
 }});

tl1.to(".top-content",{ 
  rotateX:"110deg",
  opacity:0,
  duration:2,
},'v')
.to(".btm-content",{
  rotateX:"-110deg",
  opacity:0,
  duration:2,
},'v')
.to(".img",{
  width:"75%",
  height:"75%",
  borderRadius: "0%",
  duration:7,
},'v');

  var tl2 = gsap.timeline({ //its for strip animation on scrollTrigger
    scrollTrigger:{
    trigger: ".p-2",
    markers: true,
    start: "0% 90%",
    end: "150% 90%",
    scrub: true,
  }
});
  tl2.to(".strip-l",{
    marginLeft:"0%",
  },'x')
    tl2.to(".strip-r",{
    marginLeft:"-100%",
  },'x')
 
var ts = gsap.timeline({scrollTrigger:{
    trigger:"#serviecs",
    markers:true,
    start:"35% 50%",
    end:"100% 50%",
    scrub:2,
    pin:true
}});
ts
.to(".serviecs-text",{
    top: "-7",
    opacity:0, 
    display:"none"
},'a')
.to("#card-1",{
    top: "35%",
},'a')
.to("#card-2",{
    top: "130%",
},'a')
.to("#card-2",{
    top: "42%",
},'b')
.to("#card-1",{
     opacity:0, 
    display:"none"
},)

.to("#card-1",{
    width: "40%",
    height: "40vh",
},'b')

.to("#card-3",{
    top: "130%"
}, 'b')
.to("#card-3",{
    top: "50%"
}, 'c')

.to("#card-2",{
    width: "40%",
    height: "40vh",
},'c')
.to("#card-2",{
     opacity:0, 
    display:"none"
},)

