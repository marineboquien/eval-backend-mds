<!DOCTYPE html>
<html>
    <head>
    	<title>Ma page d'accueil</title>
    </head>
    <body>
     <?php echo'<p>Bienvenue sur notre formulaire</p>' ; ?>
        <form name="nom du prospect" method="get" action="formulaire.php">  
       // J'utilise la balise form pour créer mon formulaire de base. J'utilise la méthode get.
     <legend>Identifiant</legend>
      <p>
         Nom : <input type="text" name="mbnom"/> <br/>
         Ville : <input type="text" name="mbville"/><br/>
         Numero de telephone : <input type="text" name="mbtelephone"><br/>
         Adresse email : <input type="text" name="mbemail"><br/> // Maintenant, nous pouvons compléter le formulaire.
      </p>
      <p> echo $_GET [mbnom]</p>
      <p> echo $_GET [mbville] </p>
     <select name="type de projet">
     	<option value="wordpress">Choix 1</option> // J'ajoute les types de projet : champs "select"
     	<option value="Vue.js">choix 2</option>
     </select
     <p>
     	Option du projet : 
     	<input type="checkbox" name="formulaire de contact avancé" id="formulaire de contact"> 
     	//J'ajoute les options du projet avec des cases à cocher
     	<input type="checkbox" name="adaptations mobile spécifiques" id="formulaire de contact">
     	<input type="checkbox" name="design personnalisé" id="formulaire de contact">
 	 </p>
 	  // La variable globale $_ nous donne accès aux données envoyées avec la méthode GET par leur nom
 	  // Pour avoir accès aux données envoyées avec la méthode GET, on utilise $_GET
    </form>
  </body>
</html>
