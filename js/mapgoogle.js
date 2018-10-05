function initMap() {

  var johnsonice = {lat: 50.820410, lng: 4.326392};

  var johnsonice2 = {lat: 50.803081, lng: 4.336631};


  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: johnsonice});

  var map2 = new google.maps.Map(
      document.getElementById('map2'), {zoom: 18, center: johnsonice2});

  var marker = new google.maps.Marker({position: johnsonice, map: map});

  var marker2 = new google.maps.Marker({position: johnsonice2, map: map2});
}
50.803081, 4.336631
