<?php

$options = array(
    'statut' 	=> FILTER_SANITIZE_STRING,
    'nom' 	=> FILTER_SANITIZE_STRING,
    'prenom' 	=> FILTER_SANITIZE_STRING,   
    'mail' 		=> FILTER_VALIDATE_EMAIL,
    'telephone' 		=> FILTER_SANITIZE_NUMBER_INT,
    'sujet' 		=> FILTER_SANITIZE_STRING,
    'message' 		=> FILTER_SANITIZE_STRING);

    $result = filter_input_array(INPUT_POST, $options);

    if ($result != null AND $result != FALSE) {

        echo "Tous les champs ont été nettoyés !"  . "<br>";
    
    } else {
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }

    foreach($options as $key => $value) 
    {
       $result[$key]=trim($result[$key]);
    }

        echo $result['statut'] . "<br>";
        echo $result['nom'] . "<br>";
        echo $result['prenom'] . "<br>";
        echo $result['mail'] . "<br>";
        echo $result['telephone'] . "<br>";
        echo $result['sujet'] . "<br>";
        echo $result['message'] . "<br>";

?>