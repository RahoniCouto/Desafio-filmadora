<?php 
require_once('header.php');
include_once('functions.php');

?>

<section class="container">
    <div class="d-flex flex-wrap justify-content-around">
        <?php ListarCategorias() ?>
    </div>

    <div class="container">
        <h3 class="align-center m-3">Melhores preços</h3>
    </div>
    <?php listarFilmes() ?>

</section>


<?php require_once('footer.php');?>