<?php include_once('V_entete.php');?>
<div id="bloc-page">
    <?php include_once('V_menu.php');?>
    <div id="bloc-contenu">
        <?php if (!is_null($this->dataMagasin['lesMagasins'])): ?>
            <h2>Tous les Magasins</h2>
        <?php endif; ?>
        <div class="magasin-list">
            <?php foreach ($this->dataMagasin['lesMagasins'] as $unMagasin): ?>
                <div class="magasin">
                    <div class="magasin-nom"><?= $unMagasin->GetNom() ?></div>
                    <div class="magasin-adresse"><?= $unMagasin->GetAdresseRue() ?></div>
                    <div class="magasin-ville"><?= $unMagasin->GetCpVille() ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include_once('v_piedPage.php');?>
