<?php
    require_once "../nav/cabecalho.php";
?>
    
    <form action="exer1resp.php" method="post">
        <div class="row">
            <div class="col">
                <h1>Exercício 1</h1>
                <label for="valor" class="form-label">Informe o valor</label>
                <input type="number" class="form-control" id="valor" name="valor1">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

<?php
    require_once "../nav/rodape.php";
?>