var nom = "nom"
var prenom = "prénom"
var pseudo = "pseudo"
var mdp = "mot de passe"
var email = "E-mail"

function verify(element1, element2, element3, element4, element5, element6) {
    // La fonction reçois en paramètre les 2 éléments
    var passed = false
        // On va donner à la variable passed la valeur false (fausse).

    if (element1.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre " + nom + " dans le premier champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        element1.focus()
            // et on y place le curseur grâce à la méthode focus
    } else if (element2.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre " + prenom + " dans le second champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        element2.focus()
            // et on y place le curseur grâce à la méthode focus
    } else if (element3.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre " + pseudo + " dans le troisième champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        element3.focus()
            // et on y place le curseur grâce à la méthode focus
    } else if (element4.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre " + email + " dans le quatrième champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        element4.focus()
            // et on y place le curseur grâce à la méthode focus
    } else if (element5.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre " + mdp + " dans le cinqième champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        element5.focus()
            // et on y place le curseur grâce à la méthode focus
    }

    // puis on va faire exactement la même chose pour le second champ
    else if (element6.value == '') {
        alert("Veuillez confirmer votre " + mdp + " dans le sixieme champ !")
        element6.focus()
    } else if (element5.value != element6.value)
    // Si les valeurs des 2 éléments ne sont pas égales (on utilise donc l'opérateur
    // de comparaison d'inégalité !=
    {
        alert("Les deux " + mdp + " ne condordent pas")
            // toujours la boite d'alerte
        element6.select()
            // Et la on utilise la méthode select qui permet de selectionner la valeur écrite.
    } else
        passed = true
    return passed
}


function verify2(el1, el2) {
    // La fonction reçois en paramètre les 2 éléments
    var passed2 = false
        // On va donner à la variable passed la valeur false (fausse).

    if (el1.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre identifiant dans le premier champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        el1.focus()
            // et on y place le curseur grâce à la méthode focus
    } else if (el2.value == '')
    // si le premier champ est vide (Propriété value vide)
    {
        alert("Veuillez entrer votre mot de passe dans le second champ !")
            // On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
        el2.focus()
            // et on y place le curseur grâce à la méthode focus
    } else
        passed2 = true
    return passed2
}
