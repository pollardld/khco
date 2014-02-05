//========== Mapbox
var map = L.mapbox.map('map', 'melaniehall.map-ygz05pk4')
    .setView([28, -82.52], 10);
    
map.scrollWheelZoom.disable();

// Map View All Button
var mapAll = document.getElementById('mapAll');

// Pan and hide view all button on marker click
map.markerLayer.on('click', function(e) {
    
    map.panTo(e.layer.getLatLng());
    
    if( !(mapAll.classList.contains('index')) ) {
        mapAll.classList.add('index');
    }

    var i = e.layer.getLatLng();
    popupLink(i);
});
    
// Link Address to Google Map Directions
function popupLink(i) {

    if( !jQuery('.marker-title').hasClass('directions') ) {
        jQuery('.marker-title').addClass('directions');
        jQuery('.marker-title').append( '<div class="getDirections">Get Directions</div>' );
    }

    jQuery('.getDirections').on( 'click', function() { 
        window.open( 'http://maps.google.com/?q=' + i.lat.toString() + ' ' + i.lng.toString());    
    });
}

// wait until the markers are loaded, so we know that `map.markerLayer.eachLayer` will actually go over each marker
map.markerLayer.on('ready', function(e) {

    // Grab the Legend
    var legend = document.getElementById('map-legend');

    var all = [];

    // Prepend each location under the legend div
    var allPoints = map.markerLayer.eachLayer( function(e) {
                        all.push(e.options.title);
                        all.sort();
                        all.reverse();
                    });

    jQuery.each( all, function(key, value) {
        jQuery(legend).prepend('<section class="poi">' + value + '</section>'); 
    });

    // Attach click event to new sections
    jQuery('.poi').on('click', function() {
        
        $title = jQuery(this).html();

        map.markerLayer.eachLayer( function(marker) {
            if (marker.feature.properties.title === $title ) {
                marker.openPopup();
                map.panTo(marker.getLatLng());
                var i = marker.getLatLng();
                popupLink(i);
            }
        });
    });
});