<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
#map {
    height: 400px;
}
</style>
<?php
    require_once '../view/user_header.php';
  ?>
<ul>
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url(); ?>/leafletdrawinghasil">Hasil GeoJSON-Mysql</a></li>
  
</ul>
<br>
<div id="map"></div>

<br>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>

<script>
var map = L.map('map').setView([-6.584492, 106.806725], 13);
     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
         attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
     }).addTo(map);
     

<?php foreach ($json as $key ) { ?>
  var drawnItems = L.geoJson(<?php echo $key->GeoJson; ?>).addTo(map);
<?php } ?>
</script>