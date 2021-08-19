<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

// recuperation des donnees GET, POST, et SESSION
$userDaily = getUserDaily();
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
?>
<script>
window.addEventListener("load", function(event) {
    console.log(""<?php 
    $id = false;
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date('Y-m-d');
    foreach ($userDaily as $row){
        if(($row['ip'] == $ip) AND ($row['date'] == $date)){
            $id = true;
        }
    }
    if($id){
        echo $row['ip']; 
        echo "IP YESS";
    }else{
        addUserDaily($date,$ip);
    }?>"");
});

</script>
<?php

// traitement si necessaire des donnees recuperees
$userDaily = getUserDaily();
$users = 0;
$date = date('Y-m-d');
foreach ($userDaily as $row){
    if($row['date'] == $date){
        $users ++;
    }
}

// appel du script de vue qui permet de gerer l'affichage des donnees
$title = "Accueil";
include "$racine/vues/entete.html.php";
include "$racine/vues/vueAccueil.php";
include "$racine/vues/pied.html.php";
?>