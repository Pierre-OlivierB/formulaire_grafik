<?php
$aDeviner=150;
$erreur=null;
$succes=null;
$value=null;
if (isset($_POST['chiffre'])) {
    $value=(int)$_POST['chiffre'];
    if ($value>$aDeviner){
        $erreur='votre chiffre est trop grand';
    }
    elseif ($value<$aDeviner){
        $erreur='votre chiffre est trop petit';
    }
    else{
        $succes="bravo vous avez trouvez le chiffre <strong>$aDeviner</strong>";
    }
     
}
?>


<?php if ($erreur):?>
    <div class="alert alert-danger">
        <?= $erreur?>
    </div>
<?php elseif ($succes):?>
    <div class="alert alert-success">
        <?= $succes?>
    </div>
    
<?php endif?>

<form action="index.php" method="post">
    <!-- <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value?>">
    <input type="text" name="demo" value="test" id=""> -->
    <input type="checkbox" name="parfum" value="fraise" id="">Fraise <br>
    <input type="checkbox" name="parfum" value="vanille" id="">Vanille <br>
    <input type="checkbox" name="parfum" value="chocolat" id="">Chocolat <br>
    <button type="submit">Devinez</button>

</form>