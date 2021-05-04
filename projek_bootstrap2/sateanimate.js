function removeElement(element) {
  $(element).remove();
}

function toonbganmt(){
  let tl_toonbganmt = gsap.timeline({ repeat: -1 ,delay:6})
  .to(".toon-bg-anmt-1", {duration:1,opacity:0,stagger:0.4})
  .to(".toon-bg-anmt-1", {duration:1,opacity:1,stagger:0.4},"-=0.8")
  .to(".toon-bg-anmt-2", {duration:1,opacity:0,stagger:0.5},"-=1.5")
  .to(".toon-bg-anmt-2", {duration:1,opacity:1,stagger:0.5},"-=0.8")
}


let tl_splashscreen=gsap.timeline({})
tl_splashscreen.from(".logo-splash-screen",{duration:3,autoAlpha: 0,scale:0})
.to(".logo-splash-screen",{duration:1,alpha: 0})
.to("#splash-screen",{duration:1,alpha: 0},"-=0.8")
.call(removeElement,["#splash-screen"])

.from(".toon-bg-anmt-1",{duration:0.25,opacity:0,stagger:0.1})
.from(".toon-bg-anmt-2",{duration:0.25,opacity:0,stagger:0.1})
.from("#home .title-tag",{scale:0,duration:2,opacity:0 ,transformOrigin:"0 50%"})
.from("#home .CP-child",{y:200,duration:2,opacity:0, delay:1, transformOrigin:"100% 0%"},"-=1.5")
.add(toonbganmt())




let tl_homeslidshow = gsap.timeline({ repeat: -1 })
// { repeat: -1 }
tl_homeslidshow.to(".circle1", { duration:1,alpha: 0})
tl_homeslidshow.to(".circle2", { duration:1,alpha: 0})
tl_homeslidshow.to(".circle3", { duration:1,alpha: 0})
tl_homeslidshow.to(".circle1", { duration:1,alpha: 0.5},"-=1.8")
tl_homeslidshow.to(".circle2", { duration:1,alpha: 0.5},"-=1.2")
tl_homeslidshow.to(".circle3", { duration:1,alpha: 0.5},"-=0.6")

// tl2.to(".circle3", 1,{ alpha: 0})

// tl2.from(".circlea",{
  //   opacity:0,
  //   duration:2,
  //   scaleX:0,
  //   scaleY:0,
  // })
  // tl2.from(".circleb",{
  //   opacity:0,
  //   duration:2,
  //   scaleX:0,
  //   scaleY:0,
  // },"-=1")
  
  // .to(".circlea",{ 
  //   opacity:0,
  //   duration:1.5,
  // },"-=1.5")
  // .to(".circleb",{ 
  //   opacity:0,
  //   duration:1,
  // },"-=0.5")

  if ($(window).scrollTop()) {
    $(".navbar").addClass("nav-scroll");

    $(".nav-link").addClass("nav-link-scroll");
    $(".nav-link-scroll").removeClass("nav-link");

    $(".logo").addClass("logo-scroll");
    $(".logo-scroll").removeClass("logo");
    
  }


$(window).scroll(function () {
    if ($(window).scrollTop()) {
      $(".navbar").addClass("nav-scroll");

      $(".nav-link").addClass("nav-link-scroll");
      $(".nav-link-scroll").removeClass("nav-link");

      $(".logo").addClass("logo-scroll");
      $(".logo-scroll").removeClass("logo");
      
    } else {
      $(".navbar").removeClass("nav-scroll");

      $(".nav-link-scroll").addClass("nav-link");
      $(".nav-link").removeClass("nav-link-scroll");
      
      $(".logo-scroll").addClass("logo");
      $(".logo").removeClass("logo-scroll");
    }
  });




let tl_productrow1=gsap.timeline({
  scrollTrigger:{
    trigger:'#product .row-1',
    start:"top 80%"
  }
});

tl_productrow1.from(".row-1 .card",{opacity:0,duration:1,x:100,stagger:0.5})

let tl_productrow2=gsap.timeline({
  scrollTrigger:{
    trigger:'#product .row-2',
    start:"top 80%"
  }
});

tl_productrow2.from(".row-2 .card",{opacity:0,duration:1,x:100,stagger:0.5})

let tl_productrow3=gsap.timeline({
  scrollTrigger:{
    trigger:'#product .row-3',
    start:"top 80%"
  }
});

tl_productrow3.from(".row-3 .card",{opacity:0,duration:1,x:100,stagger:0.5})




let tl_eventtextcontent = gsap.timeline({ 
  defaults: { duration: 3},
  
  repeat:-1
})
// tl_eventtextcontent.to(".text-content .h1-1", { autoAlpha: 0})
tl_eventtextcontent.from(".text-content .h1-2", { autoAlpha: 0},"-=2")

tl_eventtextcontent.to(".text-content .h1-2", { autoAlpha: 0,delay: 1.7 })
tl_eventtextcontent.from(".text-content .h1-3", { autoAlpha: 0},"-=2")

tl_eventtextcontent.to(".text-content .h1-3", { autoAlpha: 0,delay: 1.7 })
tl_eventtextcontent.from(".text-content .h1-4", { autoAlpha: 0 },"-=2")

tl_eventtextcontent.to(".text-content .h1-4", { autoAlpha: 0,delay: 1.7 })
tl_eventtextcontent.from(".text-content .h1-1", { autoAlpha: 0},"-=2")
tl_eventtextcontent.to(".text-content .h1-1", { autoAlpha: 0 })

let tl_eventtextcontentimg = gsap.timeline({ 
  defaults: { duration: 3},
  
  repeat:-1
})
// tl_eventtextcontentimg.to(".img-content .img-1", { autoAlpha: 0})
tl_eventtextcontentimg.from(".img-content .img-2", { autoAlpha: 0},"-=2")

tl_eventtextcontentimg.to(".img-content .img-2", { autoAlpha: 0,delay: 1.7 })
tl_eventtextcontentimg.from(".img-content .img-3", { autoAlpha: 0},"-=2")

tl_eventtextcontentimg.to(".img-content .img-3", { autoAlpha: 0,delay: 1.7 })
tl_eventtextcontentimg.from(".img-content .img-4", { autoAlpha: 0 },"-=2")

tl_eventtextcontentimg.to(".img-content .img-4", { autoAlpha: 0,delay: 1.7 })
tl_eventtextcontentimg.from(".img-content .img-1", { autoAlpha: 0},"-=2")
tl_eventtextcontentimg.to(".img-content .img-1", { autoAlpha: 0 })



// let hover_playbutton = document.querySelector("#what-we-do .button-play");
let tl_playbuttonaction= gsap.timeline({ 
  repeat:-1,
  paused:true
})

let hover_playbuttonaction = tl_playbuttonaction.from(".shadow-button-play", {
    opacity:0,
    duration:1.5,
    scaleX:0,
    scaleY:0,
})
.to(".shadow-button-play",{
    opacity:0,
    duration:1,
},
"-=0.5"
);

$(document).on("mouseenter", "#what-we-do .button-play", function() {
  hover_playbuttonaction.play();
}).on("mouseleave", "#what-we-do .button-play", function(){
  hover_playbuttonaction.restart();
  hover_playbuttonaction.pause();
});

$(document).ready(function(){
$(".button-switch-video").on('click', function(e) {
  $(".mask2").removeAttr("style");
  let tl_anmtvideolist = gsap.timeline()

  // tl_anmtvideolist.set(".mask", {transformOrigin:"100% 50%"});
  tl_anmtvideolist.from(".mask2", 1.5, {width:"0px"})
  // tl_anmtvideolist.set(".mask", {transformOrigin:"100% 50%"});
  tl_anmtvideolist.to(".mask2", 1.5, {delay:1,width:"0px"})
});
});

$(document).ready(function(){
  $(".mask2").mouseenter(function(){
    $(".mask2").removeAttr("style");
  });
});

// TweenMax.set(".mask", {width:"0%"});

document.querySelector(".mask2").addEventListener("mouseenter", () => {
  gsap.from(".mask2", { duration: 1, width: "0px",});  
});

document.querySelector(".mask2").addEventListener("mouseleave", () => {
  gsap.to(".mask2", { duration: 1, width: "0px" });
 
});



// gsap.registerPlugin(ScrollTrigger);


gsap.utils.toArray(".box-img-testi").forEach(boximgtesti => {
  let tl_testiimg = gsap.timeline({
    scrollTrigger: {
      trigger:boximgtesti,
      // toggleActions: "restart none none none",
      start: "top 100%",
    }
  });

  tl_testiimg.from(boximgtesti, {
    opacity:0,duration:1,y:300
  });
});

gsap.utils.toArray(".box-img-testi2").forEach(boximgtesti2 => {
  let tl_testiimg2 = gsap.timeline({
    scrollTrigger: {
      trigger:boximgtesti2,
      // toggleActions: "restart none none none",
      start: "top 100%",
      
    }
  });

  tl_testiimg2.from(boximgtesti2, {
    opacity:0,duration:1,y:300
  });
});
