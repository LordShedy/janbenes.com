var center = SMap.Coords.fromWGS84(14.41790, 50.12655);
var m = new SMap(JAK.gel("m"), center, 13);
m.addDefaultLayer(SMap.DEF_BASE).enable();
m.addDefaultControls();

var layer = new SMap.Layer.Marker();
m.addLayer(layer);
layer.enable();

var card = new SMap.Card();
card.getHeader().innerHTML = "<strong>Nadpis</strong>";
card.getBody().innerHTML = "Ahoj, já jsem <em>obsah vizitky</em>!";

var options = {
    title: "Dobré ráno"
};
var marker = new SMap.Marker(center, "myMarker", options);
marker.decorate(SMap.Marker.Feature.Card, card);
layer.addMarker(marker);
