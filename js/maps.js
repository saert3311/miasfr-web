'use strict'
// Initialize and add the map

function initMap() {

    const miasfr = { lat: 25.8754687, lng: -80.3628027 };

    const map = new google.maps.Map(document.getElementById("googlemap"), {
      zoom: 17,
      center: miasfr,
    });

    const marker = new google.maps.Marker({
      position: miasfr,
      map: map,
      animation: google.maps.Animation.DROP,
    });
  }
  
  window.initMap = initMap;