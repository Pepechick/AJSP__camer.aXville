const btn = document.getElementById("btn-camera"); 
const popup = document.getElementById("box_new-camera"); 

btn.addEventListener("click", () => { 
    popup.style.display = popup.style.display === "flex" ? "none" : "flex"; 
});
