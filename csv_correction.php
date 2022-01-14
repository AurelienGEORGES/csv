<?php //petit code pour lire les données
$file = "file.csv";
$openfile = fopen($file, "r+");
$cont = fread($openfile, filesize($file));
echo $cont;
?>

<?php //code pour récupérer les données dans un tableau
$file = "file.csv";
$taille = filesize($file);
$delimiteur = ",";
$Noms = [];
/* ouverture en lecture écriture*/
if($fp = fopen($file,"r+")) {
    /* extraction d'une ligne */
    while ($ligne = fgetcsv($fp, $taille, $delimiteur)) {
        /* affichage des champs
        echo $ligne['0'].';'.$ligne['1'].';'.$ligne['2'].';'.$ligne['3'].';'.$ligne['4'].';'.$ligne['5'].';'.$ligne['6'];
        echo "\n"; */

        /*récupération des données*/
        $csv[] = array('prenom' => $ligne['0'], 'nom' => $ligne['1'], 'mail' => $ligne['2'], 'profession' => $ligne['3'], 'date' => $ligne['4'], 'country' => $ligne['5'], 'tel' => $ligne['6']);
    }
    //on a notre tableau avec toutes nos données
    
    //var_dump($csv);

    //fonction qui permet de mettre la date au format années-mois-jours
    function FormatDate($dateFileFR) {
        $dateFileUS = implode('/',array_reverse  (explode('-',$dateFileFR)));
        return $dateFileUS;
    }
    
    /* fermeture fichier */
    fclose ($fp);
} else {
    echo "Ouverture impossible.";
}
?>






?>  

