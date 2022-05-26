function iniciarMap(){
    var coord = {lat:-11.0131404 ,lng: -74.8276712};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}