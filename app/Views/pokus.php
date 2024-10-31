<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
    <?= anchor('pokus', 'klikni sem! no hack!!!'); ?>
    <?php 
    $img = array(
        'src' => 'obrazky/logo.png',
        'alt' => '',
        'class' => 'img-fluid mx-auto d-block'
    );
    echo img($img);


?>

    <?=$this->endSection(); ?>
