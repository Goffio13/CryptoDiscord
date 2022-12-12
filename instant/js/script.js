function erreur() {
    document.getElementById("erreur").style.display = "flex";
    document.getElementById("attention").style.display = "none";
    document.getElementById("connexion").style.display = "none";
}

function attention() {
    document.getElementById("erreur").style.display = "none";
    document.getElementById("attention").style.display = "flex";
    document.getElementById("connexion").style.display = "none";
}

function connexion() {
    document.getElementById("erreur").style.display = "none";
    document.getElementById("attention").style.display = "none";
    document.getElementById("connexion").style.display = "flex";

}

function alll() {
    document.getElementById("erreur").style.display = "flex";
    document.getElementById("attention").style.display = "flex";
    document.getElementById("connexion").style.display = "flex";
}