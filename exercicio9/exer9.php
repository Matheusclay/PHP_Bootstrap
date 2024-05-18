<?php
require_once "../nav/cabecalho.php";
?>
<form action="exer9resp.php" method="post">

    <div class="row">
        <div class="col-md-12">

            <label>Mostrar sua idade, de acordo o seu ano de nascimento</label><br>
            <input type="number" class="form-control" name="valor1">Digite seu ano de nascimento<br>
            
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
<?php
require_once "../nav/rodape.php";
?>