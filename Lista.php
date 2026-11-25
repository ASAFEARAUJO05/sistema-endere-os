<?php
include "acoes.php";
$enderecos = mysqli_fetch_all(buscarTabela(`enderecos`));
$verificar_linhas = count($enderecos) > 0;
?>
<?php if ($verificar_linhas): ?>
    <?php foreach ($enderecos as $endereco): ?>
    <?php endforeach ?>
<?php else: ?>
    <p>nenhum <b>cep</b> em nosso sistema</p>
<?php endif ?>