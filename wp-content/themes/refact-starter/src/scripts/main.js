'use strict';
import Flickity from 'flickity';  
import mapboxgl from 'mapbox-gl';

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

    const input = document.querySelector(".js-book-number");
    const increaseBtn = document.querySelector(".js-input-increase-btn");
    const decreaseBtn = document.querySelector(".js-input-decrease-btn");

    increaseBtn.addEventListener("click",  (e) => {
      e.preventDefault();
        let currentValue = parseInt(input.value, 10);
        let step = parseInt(input.step, 10) || 1;
        input.value = currentValue + step;
    });

    decreaseBtn.addEventListener("click",  (e) => {
      e.preventDefault();
        let currentValue = parseInt(input.value, 10);
        let step = parseInt(input.step, 10) || 1;
        let min = parseInt(input.min, 10) || 1;

        if (currentValue > min) {
            input.value = currentValue - step;
        }
    });
    
    const longitude = -74.006;
    const latitude = 40.7128;

    const markerLongitude = longitude;
    const markerLatitude = latitude;

    mapboxgl.accessToken = 'pk.eyJ1Ijoic2FlZWRzaGFiYW5pIiwiYSI6ImNtOGZ2a3k3NzBndGIyanByMW1oNzV2ZmkifQ.c130cXUB64Aztc5Vva_9fQ';

    const mapContainer = document.querySelector('.js-map');

    if (mapContainer) {
        window._map = new mapboxgl.Map({
            container: mapContainer,
            style: 'mapbox://styles/saeedshabani/cm8fw8mcl000901sa3oz2dh4l',
            center: [longitude, latitude], 
            zoom: 15,
            interactive: false,
            attributionControl: false,
            zoomControl: false
        });

        window._map.on('style.load', () => {
            window._map.getStyle().layers.forEach((layer) => {
                if (layer.type === 'symbol') {
                    window._map.setLayoutProperty(layer.id, "visibility", "none");
                }
            });
            window._map.resize();
        });

        // ✅ FIX: Use `new mapboxgl.Marker()`
        // window.map_marker = new mapboxgl.Marker({ color: 'red', scale: 1.2 }) 
        //     .setLngLat([markerLongitude, markerLatitude])
        //     .addTo(window._map);
        // window.map_marker = new mapboxgl.Marker({ color: 'red', scale: 1.2 }) 
        // .setLngLat([markerLongitude, markerLatitude])
        // .addTo(window._map);

        new mapboxgl.Marker({ color: 'red' }) 
        .setLngLat([markerLongitude, markerLatitude])
        .addTo(window._map);

        window._map.fitBounds([
            [markerLongitude - 0.001, markerLatitude - 0.001], 
            [markerLongitude + 0.001, markerLatitude + 0.001]
        ], { padding: 50 });

          // ✅ Remove unnecessary `easeTo()` (not needed when center is already set)
    }
          
    const showModal = (modal_type) => {

      let modal = null;

      switch (modal_type) {
        case 'success':
          modal = document.querySelector(".js-modal--success");
          break;
        case 'failed':
          modal = document.querySelector(".js-modal--failed");
          break;
      }

      const overlay = document.querySelector(".js-page-overlay");

      if (modal && overlay) {
        modal.classList.add("is-active");
        overlay.classList.add("is-active");
      }

    };
    
    const hideModal = () => {
      const modal = document.querySelector(".js-modal.is-active");
      const overlay = document.querySelector(".js-page-overlay.is-active");
      if (modal && overlay) {
        modal.classList.remove("is-active");
        overlay.classList.remove("is-active");
      }
    };
    
    // Close modal when clicking on the confirm button
    document.querySelectorAll(".js-confirm-modal").forEach((button) => {
      button.addEventListener("click", hideModal);
    });
    
    // Listen for form submission and show the modal
    const form = document.querySelector(".js-book-form");
    if (form) {
      form.addEventListener("submit",  (e) => {
        e.preventDefault(); // Prevent actual form submission
        const isSuccess = Math.random() < 0.5; // Randomly choose success or failure
        showModal(isSuccess ? 'success' : 'failed'); // Show the modal
      });
    }
 
  });
})();
