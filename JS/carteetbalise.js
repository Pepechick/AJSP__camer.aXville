const btn = document.getElementById("btn-camera"); 
const popup = document.getElementById("box_new-camera"); 
const popup_infos = document.getElementById("box_infos_camera");

// fonction qui ferme les popups
function closeAllPopups() { 
    popup.style.display = "none"; 
    popup_infos.style.display = "none"; 
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
let marker = L.marker([47.183113, -1.545379]);
    // ajout à la carte
marker.addTo(map);

marker.on("click", () => { 
    if (popup_infos.style.display === "flex") { 
        closeAllPopups(); } 
    else { 
        closeAllPopups(); 
        popup_infos.style.display = "flex"; 
    } 
});