<?php include("template/cabecera.php"); ?>

<?php
include("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM redes");
$sentenciaSQL->execute();
$listaRedes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaRedes as $redes) {?>

<div class="col-md-5">   
<div class="card">
    <img class="card-img-top" src="./img/<?php echo $redes['imagen']; ?>" alt="">
    <div class="card-body">
        <h4 class="card-title"> <?php echo $redes['nombre']; ?></h4>
        <a name="" id="" class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573125058764" role="button"> Ver mas </a>
</div>
</div>
</div>

<?php } ?>






<?php include("template/pie.php"); ?>