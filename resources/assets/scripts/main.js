// import external dependencies
import 'jquery';
import 'bootstrap/dist/js/bootstrap.min.js';

import { gsap } from 'gsap/dist/gsap.min.js';
import { ScrollTrigger } from 'gsap/dist/ScrollTrigger.min.js';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

gsap.registerPlugin(ScrollTrigger);

// Load Events
jQuery(document).ready(() => routes.loadEvents());

$(document).ready(function(){

  var lastScrollTop = 0;
  $(window).scroll(function(){
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
        //https://gist.github.com/GregKochnev/2f56db8f717000323696
      $('nav').removeClass('scroll');
    } else {
       //  
      $('nav').addClass('scroll');
    }
    lastScrollTop = st;
  });
  //$(window).scroll(function(){
  //  $('nav').toggleClass('scroll', $(this).scrollTop() > 200);
  //})
});


gsap.utils.toArray('.parallax-container').forEach((section, i) => {
  section.bg = section.querySelector('.bg'); 

  // Give the backgrounds some random images
  //section.bg.style.backgroundImage = `url(https://picsum.photos/${innerWidth}/${innerHeight}?random=${i})`;

  // Do the parallax effect on each section
  if (i) {
    section.bg.style.backgroundPosition = `50% ${-innerHeight / 2}px`;

    gsap.to(section.bg, {
      backgroundPosition: `50% ${innerHeight / 2}px`,
      ease: 'none',
      scrollTrigger: {
        trigger: section,
        scrub: true,
      },
    });
  } 
  // the first image should be positioned against the top. Use px on the animating part to work with GSAP. 
  else {
    section.bg.style.backgroundPosition = '50% 0px'; 

    gsap.to(section.bg, {
      backgroundPosition: `50% ${innerHeight / 2}px`,
      ease: 'none',
      scrollTrigger: {
        trigger: section,
        start: 'top top', 
        end: 'bottom top',
        scrub: true,
      },
    });
  }
});


gsap.utils.toArray('.fadeIn').forEach((box) => {
  const anim = gsap.fromTo(box, {autoAlpha: 0, y: 100}, {duration: .3, autoAlpha: 1, y: 0});
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    toggleActions: 'play none none none',
    once: true,
  });
});

gsap.utils.toArray('.fadeInDown').forEach((box) => {
  const anim = gsap.fromTo(box, {autoAlpha: 0, y: -100}, {duration: .9, autoAlpha: 1, y: 0});
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    toggleActions: 'play none none none',
    once: true,
  });
});

gsap.utils.toArray('.fadeInUp').forEach((box) => {
  const anim = gsap.fromTo(box, {autoAlpha: 0, y: 100}, {duration: .9, autoAlpha: 1, y: 0});
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    toggleActions: 'play none none none',
    once: true,
  });
});




