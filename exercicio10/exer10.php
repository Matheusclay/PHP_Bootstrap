<?php
require_once "../nav/cabecalho.php";
?>

<form action="exer10resp.php" method="post">
    <div class="row">
        <div class="col-md-12">
            <h1>Exercício 10</h1>
            <label>Mostrar o IMC</label><br>
            <input type="number" class="form-control" name="valor1">Informe o peso em gramas<br>
            <input type="number" class="form-control" name="valor2">Informe a altura em centimetro<br>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

<?php
require_once "../nav/rodape.php";
?>