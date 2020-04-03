<?
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

$titulo =  str_replace('#','-', $_POST['titulo']);
$categoria =  str_replace('#','-', $_POST['categoria']);
$descricao =  str_replace('#','-', $_POST['descricao']);

$arquivo= fopen('arquivo.txt','a');//comando que cria um arquivo txt externo. primeiro parâmetro é o nome do arquivo a ser criado// tipo de comando dentro do arquivo (checar documentação);

$texto = $titulo."#".$categoria."#".$descricao . PHP_EOL;



//PHPEOL serve para quebrar a linha. quando abrir mais de um chamado. ele cria um chamado por linha.

fwrite($arquivo, $texto);//escreve no arquivo. primeiro pergunta ONDE e O QUÊ.

fclose($arquivo); //fechar o arquivo pergunta QUAL ARQUIVO.

header('Location: abrir_chamado.php');

?>