function checkPasswords() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const verif = document.getElementById("verifpassword").value;

    const errorEmail = document.getElementById("errorEmail");
    const errorPassword = document.getElementById("errorPassword");
    const errorVerif = document.getElementById("errorVerif");
    const submitBtn = document.getElementById("submitBtn");

    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,20}$/;

    let isValid = true;

    // Reset messages
    errorEmail.textContent = "";
    errorPassword.textContent = "";
    errorVerif.textContent = "";

    // EMAIL
    if (email !== "") {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorEmail.textContent = "Adresse email invalide.";
            isValid = false;
        }
    } else {
        isValid = false;
    }

    // MOT DE PASSE
    if (password !== "") {
        if (password.length < 8 || password.length > 20) {
            errorPassword.textContent = "Le mot de passe doit contenir entre 8 et 20 caractères.";
        }
        else if (!/[A-Z]/.test(password)) {
            errorPassword.textContent = "Ajoutez une lettre majuscule.";
        }
        else if (!/[a-z]/.test(password)) {
            errorPassword.textContent = "Ajoutez une lettre minuscule.";
        }
        else if (!/\d/.test(password)) {
            errorPassword.textContent = "Ajoutez un chiffre.";
        }
        else if (!/[\W_]/.test(password)) {
            errorPassword.textContent = "Ajoutez un caractère spécial.";
        }
    } else {
        isValid = false;
    }

    // VERIFICATION
    if (verif !== "") {
        if (password !== verif) {
            errorVerif.textContent = "Les mots de passe ne correspondent pas.";
            isValid = false;
        }
    } else {
        isValid = false;
    }

    // Active / désactive le Bouton submit
    submitBtn.disabled = !isValid;

    return isValid;
}

function checkPseudo() {
    const pseudo = document.getElementById("pseudo").value;
    const errorPseudo = document.getElementById("errorPseudo");
    const submitBtn = document.getElementById("submitBtn");

    // Reset message
    errorPseudo.textContent = "";

    // Vérification simple côté client (ex: longueur)
    if (pseudo.length < 3 || pseudo.length > 20) {
        errorPseudo.textContent = "Le pseudo doit contenir 3 à 20 caractères.";
        submitBtn.disabled = true;
        return;
    }

    // Vérification côté serveur via fetch
    fetch("check_pseudo.php?pseudo=" + encodeURIComponent(pseudo))
        .then(response => response.json())
        .then(data => {
            if (data.exists) {
                errorPseudo.textContent = "Ce pseudo est déjà pris.";
                submitBtn.disabled = true;
            } else {
                errorPseudo.textContent = "";
                // réactive le bouton si tous les autres champs sont valides
                submitBtn.disabled = !checkForm(); 
            }
        })
        .catch(err => {
            console.error(err);
        });
}