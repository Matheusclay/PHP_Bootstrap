<?php
require_once "../nav/cabecalho.php";
?>
<h2>Exercício 7</h2>
<form action="exer7resp.php" method="post">
    <div class="row">
        <div class="col-md-12">
            <label>Conversão metros para centímetros</label><br>
            <input type="number" class="form-control" name="valor1">Informe o valor em metros<br>
            
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
<?php
require_once "../nav/rodape.php";
?>