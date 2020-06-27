<div id="mapid" style="height: 500px;"></div>

<script>
  var mymap = L.map('mapid').setView([0, 0], 2);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/dark-v10',

  }).addTo(mymap);

  <?php
  foreach ($lokasi as $key => $value) { ?>
    L.marker([<?= $value['attributes']['Lat'] ?>, <?= $value['attributes']['Long_'] ?>]).addTo(mymap)
      .bindPopup("<b>Negara:<?= $value['attributes']['Country_Region'] ?></b> <br>" +
        "Positif:<?= $value['attributes']['Confirmed'] ?><br>" +
        "Sembuh:<?= $value['attributes']['Recovered'] ?><br>" +
        "Meninggal:<?= $value['attributes']['Deaths'] ?><br>");
  <?php } ?>
</script>