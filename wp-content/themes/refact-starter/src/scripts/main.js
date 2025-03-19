'use strict';
import Flickity from 'flickity';  

/* eslint-env browser */
(() => {
  document.addEventListener('DOMContentLoaded', () => {
    // our custom JavaScript goes here

    const nav = document.querySelector('.js-nav');  
    const navBtn = document.querySelector('.js-open-nav');  
    const closeBtn = document.querySelector('.js-close-nav');  

    // Function to add active class  
    function openNav() {  
        nav.classList.add('is-active');  
    }  

    // Function to remove active class  
    function closeNav() {  
        nav.classList.remove('is-active');  
    }  

    // Event listeners for buttons  
    navBtn.addEventListener('click', openNav);  
    closeBtn.addEventListener('click', closeNav);  


    document.querySelectorAll('.js-menu-nav-link').forEach(link => {  
      link.addEventListener('click', function(e) {  
          e.preventDefault(); // Prevent the default anchor click behavior  
  
          const menuId = this.getAttribute('data-menu-id'); // Get the data-menu-id value  

          // Hide all menu items first  
          document.querySelectorAll('.js-menu-items').forEach(item => {  
              item.style.display = 'none'; // Change to 'display: none;' to hide  
          });  
  
          // Show only the items that match the selected menu id  
          document.querySelectorAll(`.js-menu-items[data-menu-id="${menuId}"]`).forEach(item => {  
              item.style.display = 'block'; // Change to 'display: block;' to show  
          });  
  
          // Remove is-active class from all links  
          document.querySelectorAll('.js-menu-nav-link').forEach(link => {  
              link.classList.remove('is-active');  
          });  
  
          // Add is-active class to the clicked link  
          this.classList.add('is-active');  
      });  
  });  


    // element argument can be a selector string
    //   for an individual element
    // const flkty = new Flickity( '.js-carousel', {
    //   "cellAlign": "left", 
    //   "contain": true, 
    //   "draggable": true, 
    //   "pageDots": false, 
    //   "prevNextButtons" : false
    // });

    //   // Custom navigation  
    // document.querySelector('.js-btn-prev').addEventListener('click', () => {  
    //     flkty.previous();  
    // });  

    // document.querySelector('.js-btn-next').addEventListener('click', () => {  
    //     flkty.next();  
    // });  

    // document.querySelector('.js-btn-next').addEventListener('click', () => {  
    //     flkty.next();  
    // });  

    // // Optionally: Monitor slide changes  
    // flkty.on('change', (index) => {  
    //   document.querySelector('.js-carousel-slide').innerHTML = index + 1; // Display current slide number in the console  
    // });  


    // Initialize Flickity  
  const flkty = new Flickity('.js-carousel', {  
    "cellAlign": "left",  
    "contain": true,  
    "draggable": true,  
    "pageDots": false,  
    "prevNextButtons": false  
  });  

  // Custom navigation  
  const flktyBtnPrev = document.querySelector('.js-btn-prev');  
  const flktyBtnNext = document.querySelector('.js-btn-next');  

  // Function to update button states  
  function updateFlktyButtonStates() {  
    const currentIndex = flkty.selectedIndex; // Get current selected index  
    const totalSlides = flkty.slides.length; // Get total number of slides  

    // If there is no previous slide, add is-deactive to prev button  
    if (currentIndex === 0) {  
        flktyBtnPrev.classList.add('is-deactive');  
    } else {  
        flktyBtnPrev.classList.remove('is-deactive');  
    }  

    // If there is no next slide, add is-deactive to next button  
    if (currentIndex === totalSlides - 1) {  
        flktyBtnNext.classList.add('is-deactive');  
    } else {  
        flktyBtnNext.classList.remove('is-deactive');  
    }  
  }  

  // Add event listeners to navigation buttons  
  flktyBtnPrev.addEventListener('click', () => {  
    flkty.previous();  
    updateFlktyButtonStates(); // Update button states after navigating  
  });  

  flktyBtnNext.addEventListener('click', () => {  
    flkty.next();  
    updateFlktyButtonStates(); // Update button states after navigating  
  });  

  // Optionally: Monitor slide changes and update button states  
  flkty.on('change', (index) => {  
    document.querySelector('.js-carousel-slide').innerHTML = index + 1; // Display current slide number  
    updateFlktyButtonStates(); // Update button states when slide changes  
  });  

  // Initial call to set button states on page load  
  updateFlktyButtonStates();  

  });
})();
