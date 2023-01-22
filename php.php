<?php
$host = "localhost";
$port = 3306;
$user = "root";
$passwd = "";
$dbname = "enregistrement";

try{
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $passwd);
    echo "Connection etablie";
}
catch(PDOException $e){
    die("Erreur :" . $e->getMessage());
}


if(isset($_POST["nom"]) && isset($_POST["prenom"]) && 
isset($_POST["contact"]) && isset($_POST["adresse"])){
$insertion=$conn->prepare("INSERT INTO participant VALUES(NULL,:nom, :prenom, :contact, :adresse)");
$insertion->bindValue(":nom",$_POST["nom"]);
$insertion->bindValue(":prenom",$_POST["prenom"]);
$insertion->bindValue(":contact",$_POST["contact"]);
$insertion->bindValue(":adresse",$_POST["adresse"]);
$verif=$insertion->execute();
if($verif){
    echo "Insertion reussie";
}
else{
    echo "Echec d'insertion";
}
}
else{
    echo "<pre>Une var n'est pas declaree</pre>";
}
?>
