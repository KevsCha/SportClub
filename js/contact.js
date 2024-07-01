function initMap() {
    const locations = [
        { lat: 40.366305, lng:  -3.739766, title: 'Centro Deportivo Municipal Francisco Fernández Ochoa' },
        { lat: 40.421539 , lng: -3.614187, title: 'Club Deportivo Newman' },
        { lat: 40.457755, lng: -3.703396, title: 'Salesianos estrechos'},
        { lat: 40.377895, lng:  -3.673472, title: 'Polideportivo Municipal Entrevías'}, 

        
    ];
    const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: { lat: 40.416775, lng: -3.703790 }
    });
    
    locations.forEach(location => {
        let marker = new google.maps.Marker({
            position: {lat: location.lat, lng: location.lng},
            map: map,
            title: location.title
        });
        marker.addListener('click', function() {
            window.open(`https://www.google.com/maps/dir/?api=1&destination=${location.lat},${location.lng}`);
        });

    });
}

