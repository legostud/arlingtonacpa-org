(function(window,document,undefined) {
  // only run this code if there is a google map component on the page
  var gMapEl = document.querySelector('.js-google-map');

  if(typeof gMapEl === 'undefined'){
    return;
  }

  // after the api is loaded this function is called
  window.initMap = function() {

    // get the maps data
    // this could be replaced with an api
    var rawData = googleMapData[0];
      
    // *** Create the Map *** //
    // map defaults
    var initMapData = {
      scrollwheel: false
    }

    // create map Data by combining the rawData with the defaults
    var mapData = Object.assign({}, rawData.map, initMapData);

    var map = new google.maps.Map(gMapEl, mapData);

    var markers = [];

    // *** Add Markers with popups *** //
    rawData.markers.forEach(function(d,i){
      var markerData = Object.assign({map},d);

      var marker =  new google.maps.Marker(markerData);

      var template = [
        '<section class="info-window">',
          '<h3 class="info-window__name">'+ markerData.infoWindow.name +'</h3>',
          '<div class="ma__info-window__address">' + markerData.infoWindow.address + '</div>',
        '</section>'
      ].join(" ");

      var infoWindow = new google.maps.InfoWindow({
        content: template
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });

      marker.showInfo = function() {
        infoWindow.open(map, marker);
      }

      markers.push(marker);
    });
  }

  // load Google's api
  var script = document.createElement('script');
  
  script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyDNDQepPfh0XsEXA0_S2UOFR852dlr1WUg&callback=initMap";
  document.getElementsByTagName('head')[0].appendChild(script);


}(window,document));

