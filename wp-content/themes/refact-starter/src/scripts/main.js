'use strict';

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

  });
})();
