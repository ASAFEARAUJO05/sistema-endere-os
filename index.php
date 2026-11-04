<?php 
include "/api.php";
// $enderecos = buscarCep("69905232")
//echo "</pre>" ;
if(isset($_GET['cep'])){
$cep = $_GET['cep'];
$enderecos = buscarCEP($cep);

}
?>
<form method="GET">
<input
type="text"
placeholder="buscar cep..."
name="cep"
>
<button>buscar</button>
</form>
<?php if(isset($enderecos['cep'])): ?>
<div>
    <h2>CEP nao encontrado</h2>
    <ul>
<?php foreach($enderecos as $data => $valor) {
if( strlen($valor) > 0){
    echo "$data : $valor <br>";
}
}


?>
</ul>
</div>
<?php endif ?>
