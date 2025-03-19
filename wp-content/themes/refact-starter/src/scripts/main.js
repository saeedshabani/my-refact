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
  
/*
  const longitude = '2.311678';
  const latitude = '48.869647';

  const markerlongitude = '2.309878';
  const markerLatitude = '48.868989';

  mapboxgl.accessToken = 'pk.eyJ1Ijoic2FlZWRzaGFiYW5pIiwiYSI6ImNtOGZ2a3k3NzBndGIyanByMW1oNzV2ZmkifQ.c130cXUB64Aztc5Vva_9fQ';
  const mapContainer = document.querySelector('.js-map');

  const map = new mapboxgl.Map({
  //  new mapboxgl.Map({
      container: mapContainer,
      style: 'mapbox://styles/saeedshabani/cm8fw8mcl000901sa3oz2dh4l', // Use the dark style
      center: [longitude, latitude],
      zoom: 14,
      interactive: false, 
      attributionControl: false, 
      zoomControl: false, 
  });

  map.on('style.load', () => {
    map.style.stylesheet.layers.forEach((layer) => {
      if (layer.type === 'symbol') {
        map.setLayoutProperty(layer.id, "visibility", "none");
      }
    });
    // detect the map's new width and height and resize it
    map.resize();
  });

  // Create a DOM element for the marker
  const el = document.createElement('div');
  // el.className = 'c-contact__map__marker js-map-marker';
  el.className = 'js-map-marker';
  el.style.width = '38px';
  el.style.height = '38px';

  // Add SVG directly to the element
  el.innerHTML = `<svg width="38" height="38" viewBox="0 0 24 24" fill="none">
    <path d="M12 0C7.802 0 4 3.403 4 7.602C4 11.8 12 24 12 24C12 24 20 11.8 20 7.602C20 3.403 16.199 0 12 0ZM12 11C10.343 11 9 9.657 9 8C9 6.343 10.343 5 12 5C13.657 5 15 6.343 15 8C15 9.657 13.657 11 12 11Z" fill="#FF0000"/>
  </svg>`;

  // Add the marker to the map
  new mapboxgl.Marker(el)
      .setLngLat([markerlongitude, markerLatitude])
      .addTo(map);

*/

// const markerLongitude = 2.309878;
// const markerLatitude = 48.868989;

// const markerLongitude = 2.311678;
// const markerLatitude = 48.869647;
const longitude = -74.006;
const latitude = 40.7128;

// const longitude = 2.311678;
// const latitude = 48.869647;

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


      
 
  });
})();
