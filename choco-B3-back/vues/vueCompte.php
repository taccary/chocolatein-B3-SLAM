<?php if(isLoggedOn()){?>
    <div>
        <h1 class="page-header text-center">Compte</h1>
        <p class="text-center">Pseudo : <?= $user['pseudo'] ?></p>
        <p class="text-center">Mail : <?= $user['mail'] ?></p>
        <p class="text-center">Rôle : <?= $user['nomRoles'] ?></p>
    </div>


<?php }else{ header("Location: index.php"); }?>