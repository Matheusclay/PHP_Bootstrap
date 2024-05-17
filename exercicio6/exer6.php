<?php
require_once "../nav/cabecalho.php";
?>
<form action="exer6resp.php" method="post">
    <div class="row">
        <div class="col-md-12">
            <h1>Exercício 6</h1>
            <label>Ordem crescente</label><br>
            <input type="number" class="form-control" name="valor1">Informe o primeiro valor<br>
            <input type="number" class="form-control" name="valor2">Informe o segundo valor<br>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
<?php
require_once "../nav/rodape.php";
?>