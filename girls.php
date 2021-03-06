<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
<span class="metadata-marker" style="display: none;" data-region_tag="css"></span>      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
<span class="metadata-marker" style="display: none;" data-region_tag="html-body"></span>    <div id="map"></div>
    <script>
<span class="metadata-marker" style="display: none;" data-region_tag="script-body"></span>      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfGMacyZne_Y5ChtiWlfNTf3XWaJb1qgg&callback=initMap"
    async defer></script>
  </body>
</html>