<?php
 require_once 'class.gestionpersonnel.inc.php';
 require_once 'saisir.inc.php';
 $tbEmploye = array();
 $seuil = Employe::$salaireMinimum *1.10;
for($i=0;$i<4;$i++){
   $tbEmploye[$i]=new Employe(saisirChaine('Matricule: '),saisirChaine('Nom: '),saisirChaine('Prenom: '),saisirNombre('Salaire de Base: '),saisirNombre('Prime: '));
  
}
 foreach($tbEmploye as $unEmploye){
    if($unEmploye->getSalaire()<$seuil){
        $unEmploye->setPrime(100);
    }
}

$nomSalarié ="";
$salaireMax ="";
foreach ($tbEmploye as $ChaqueEmploye){
    if($ChaqueEmploye->getSalaire()>$salaireMax){
        $salaireMax = $ChaqueEmploye -> getSalaire();
        $nomSalarié = $ChaqueEmploye -> getNom();
    }
}
echo "Le salairié avec le plus grand salaire est ".$nomSalarié." avec un salaire de ".$salaireMax."\n";


$i=0;
$nom="";
$prenom="";
$salaire="";

?>