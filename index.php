<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon formulaire super mega sécurisé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">

        <link href="assets/style.css" rel="stylesheet">

    
</head>
<body>

<div class = formulaire alt = formulaire>
<form action = "reponses.php" method = "POST">
<p><SELECT id = "statut" name="statut" alt = "Civilité" size="1">
<OPTION>Mademoiselle
<OPTION>Madame
<OPTION>Monsieur
<OPTION>Non binaire 
</SELECT></p>
<div class = nom><p><label id = "nom">Nom : <input type="text" name="nom" alt = "Nom de famille" required /></label></p></div>
<p><label id = "prenom">Prénom : <input type="text" name="prenom" alt
 = "Prénom" required /></label></p>
<p><label id = "mail">Mail : <input type="email" name="mail" alt = "Adresse mail" required /></label></p>
<p><label id = "pays">Pays : <input type="text" name="pays" alt = "Pays de résidence" required /></label></p>
<p><label id = "telephone">Téléphone : <input type="tel" name="telephone" alt = "Numéro de téléphone" required /></label></p>
<p><SELECT id = "sujet" name="sujet" alt = "sujet du message" size="1">
<OPTION>Demander des renseignements
<OPTION>Passer une commande
<OPTION>Contacter le service technique
<OPTION>Autre
</SELECT></p>
<p><label id = "message" alt = "champ du message" >Message : </label></p>
<p><textarea rows="20" cols="120" required type = "text" name = "message" style = "resize:none" ></textarea></p>

<p><input type="submit" /><p>
</form>
 </div>

</body>
</html>

