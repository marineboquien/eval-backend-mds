<!DOCTYPE html>
<html>
    <head>
    	<title>Ma page d'accueil</title>
    </head>
    <body>
     <?php echo'<p>Bienvenue sur notre Formulaire</p>
        <form name="nom du prospect" method="get" action="saisie.php"> /*J'uitlise la balise form pour créer mon formulaire de base*/
    <fieldset>
     <legend>Identifiant</legend>
      <p>
         Nom du prospect : <input type="text" name="mbnom"/> <br/>
         Ville : <input type="text" name="mbville"/><br/>
         Numero de telephone : <input type="text" name="mbtelephone"><br/>
         Adresse email : <input type="text" name="mbemail"><br/>
     <input type="submit" name="mbvalider" value="OK"/> /* Maintenant, nous pouvons compléter le formulaire. */
 	 </p>
    </form>
  </body>
</html>