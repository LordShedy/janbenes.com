var center = SMap.Coords.fromWGS84(14.1314692, 50.5404392);
var m = new SMap(JAK.gel("m"), center, 13);
m.addDefaultLayer(SMap.DEF_BASE).enable();
m.addDefaultControls();

var layer = new SMap.Layer.Marker();
m.addLayer(layer);
layer.enable();

var card = new SMap.Card();
card.getHeader().innerHTML = "<strong>Zde sídlím</strong>";
card.getBody().innerHTML = "Palackého 1446/25<br>Litoměřice";

var options = {
    title: "Dobré ráno"
};
var marker = new SMap.Marker(center, "myMarker", options);
marker.decorate(SMap.Marker.Feature.Card, card);
layer.addMarker(marker);
