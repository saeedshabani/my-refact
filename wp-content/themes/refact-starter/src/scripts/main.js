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

  });
})();
