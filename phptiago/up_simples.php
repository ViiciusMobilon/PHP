<?php

try{

$diretorio_destino ="enviados/";

if(!is_dir($diretorio_destino)) //is_dir serve para ver se o diretorio exciste
  throw new Exception("Diretório não encontrado");

  // verifica se o arquivo e executavel 
  if(is_executable($_FILES ["arquivo_up"]["tmp_name"]))
  throw new Exception ("arquivos Executaveis não são permitidos");
//ela retorna informações de um caminho
  $ext_arquivo= pathinfo($_FILES ["arquivo_up"]["tmp_name"], )

      //_FILES CONTEM TODOS OS DADOS DO QUE ESTA SENDO ENVIADO
var_dump($_FILES);


// caminho do novo arquivo no servidor
$nome_arquivo_servidor = $diretorio_destino . "enviado.docx";


if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"],$nome_arquivo_servidor))
{// o muve pega o arquivo que vc quer e move para onde vc quer


echo "Arquivo enviado";
}else throw new Exception("erro");

} catch(Exception $e){
    echo $e->getMessage();
}
?>