gsap.from("#home .title-tag",{scale:0,duration:2,opacity:0 ,transformOrigin:"0 50%"})
gsap.from("#home .CP-child",{y:200,duration:2,opacity:0, delay:1, transformOrigin:"100% 0%"})



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
    start:"center bottom"
  }
});

tl_productrow1.from(".row-1 .card",{opacity:0,duration:0.5,x:100,stagger:0.5})

let tl_productrow2=gsap.timeline({
  scrollTrigger:{
    trigger:'#product .row-2',
    start:"center bottom"
  }
});

tl_productrow2.from(".row-2 .card",{opacity:0,duration:0.5,x:100,stagger:0.5})

let tl_productrow3=gsap.timeline({
  scrollTrigger:{
    trigger:'#product .row-3',
    start:"center bottom"
  }
});

tl_productrow3.from(".row-3 .card",{opacity:0,duration:0.5,x:100,stagger:0.5})




const tl_eventtextcontent = gsap.timeline({ 
  defaults: { duration: 3},
  
  repeat:-1
})
tl_eventtextcontent.to(".text-content .h1-1", { opacity: 0})
tl_eventtextcontent.from(".text-content .h1-2", { opacity: 0},"-=2")

tl_eventtextcontent.to(".text-content .h1-2", { opacity: 0,delay: 3 })
tl_eventtextcontent.from(".text-content .h1-3", { opacity: 0},"-=2")

tl_eventtextcontent.to(".text-content .h1-3", { opacity: 0,delay: 3 })
tl_eventtextcontent.from(".text-content .h1-4", { opacity: 0 },"-=2")

tl_eventtextcontent.to(".text-content .h1-4", { opacity: 0,delay: 3 })
tl_eventtextcontent.from(".text-content .h1-1", { opacity: 0},"-=2")
tl_eventtextcontent.from(".text-content .h1-1", { opacity: 1 ,delay: 2  })

const tl_eventtextcontentimg = gsap.timeline({ 
  defaults: { duration: 3},
  
  repeat:-1
})
tl_eventtextcontentimg.to(".img-content .img-1", { opacity: 0})
tl_eventtextcontentimg.from(".img-content .img-2", { opacity: 0},"-=2")

tl_eventtextcontentimg.to(".img-content .img-2", { opacity: 0,delay: 3 })
tl_eventtextcontentimg.from(".img-content .img-3", { opacity: 0},"-=2")

tl_eventtextcontentimg.to(".img-content .img-3", { opacity: 0,delay: 3 })
tl_eventtextcontentimg.from(".img-content .img-4", { opacity: 0 },"-=2")

tl_eventtextcontentimg.to(".img-content .img-4", { opacity: 0,delay: 3 })
tl_eventtextcontentimg.from(".img-content .img-1", { opacity: 0},"-=2")
tl_eventtextcontentimg.from(".img-content .img-1", { opacity: 1 ,delay: 2  })


