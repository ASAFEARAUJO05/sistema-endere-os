<?php
function buscarCEP($CEP){ 
if(strlen($CEP) === 8) {  
    // verificar se o CEP tem 8 caracteres
   $dados = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json"),true);

   if(isset($dados['erro'])) {
    //verificar se existe/ contem o campo "erro"
    return "cep nao encontrado!!";
   }else{
    return $dados;
   }
   
}
}
?>