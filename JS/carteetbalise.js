const btn = document.getElementById("btn-camera"); 
const popup = document.getElementById("box_new-camera"); 

// fonction qui ferme les popus
function closeAllPopups() { 
    popup.style.display = "none"; 
}

btn.addEventListener("click", () => { 
    if (popup.style.display === "flex") { 
        closeAllPopups(); 
    } 
    else { 
        closeAllPopups(); 
        popup.style.display = "flex"; 
    }
});

// MISE EN PLACE DE LA CARTE

// Initialisation de la carte   (centrée sur le lycée Notre-Dame - niv de zoom 16)
let map = L.map('map').setView([47.18311, -1.545379], 16);

// Gestion du fond de carte openstreetmap
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// insertion du marqueur pour le Miroir d'eau

function onMapClick(e) {
    const lat = e.latlng.lat;
    const lon = e.latlng.lng;

    document.getElementById("Latitude").value = lat.toFixed(6);
    document.getElementById("Longitude").value = lon.toFixed(6);


    popup
        .setLatLng(e.latlng)
        .setContent("Latitude: " + lat.toFixed(6) + "<br>Longitude :" + lon.toFixed(6))
        .openOn(map);

}

map.on('click', onMapClick);

const camerasLayer = L.layerGroup().addTo(map);

function loadCameras() {   // affiche les markers (fonction par chat gpt)
    fetch("get_camera.php")
        .then(res => res.json())
        .then(cameras => {

            camerasLayer.clearLayers(); // supprime les anciens markers

            cameras.forEach(cam => {
                L.marker([cam.latitude, cam.longitude])
                    .bindPopup(
                        `<strong>Camera de l'utilisateur #${cam.utilisateur_id}</strong><br>
                         ${cam.ville}<br>
                         ${cam.rue}`
                    )
                    .addTo(camerasLayer);
            });
        });
}

loadCameras();

setInterval(loadCameras, 3000);
