function obtenirValeurSelect() {

// Je target mon élément select grâce à son id 
  var selectElement = document.getElementById("selectSection");
  // je récupère son index 
  var selectedOption = selectElement.options[selectElement.selectedIndex];
  // je rentre la value dans une variable que je vais comparer par la suite
  var valeur = selectedOption.value;

  // Mes trois sections de jeu 
  var rl = document.getElementById("section_3");
  var lol = document.getElementById("section_4");
  var v = document.getElementById("section_5");

  if(valeur == "Rocket League") {
    rl.scrollIntoView({ behaviour : 'smooth' });
  }
  if(valeur == "League of Legend") {
    lol.scrollIntoView({ behaviour : 'smooth' });
  }
  if(valeur == "Valorant") {
    v.scrollIntoView({ behaviour : 'smooth' });
  }
}