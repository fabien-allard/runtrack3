function afficherjourssemaines();{
var jourssemaines =["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];


for (var i = 0; i<jourssemaines.lenght; i++) {
    // À chaque éxécution, la variable "jourssemaines" augmentera de 1
    // Lorsque'elle sera arrivée à aujourdhui, le boucle se terminera.
    console.log('Nous sommes ' + jourssemaines[i] + ' aujourd hui');
}
}
afficherjourssemaines();
