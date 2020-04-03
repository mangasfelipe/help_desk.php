<?php
/*print_r($_GET);
echo $_GET['email']; //essas porras desses nomes tem que ser igual ao nome que a gente dá lá no html. Nos espaços dos formulários. senão dá erro.
echo '<br>';
echo $_GET['senha'];
print_r($_POST);

*/
//variável que verifica se a autenticacao foi realizada
$usuario_autenticado=false;


//autenticação de usuarios
$usuarios_app = array (
    array('email'=> 'adm@teste.com.br', 'senha' => '123456'),
    array('email'=> 'user@teste.com.br', 'senha' => 'abcdef')  
);

/*echo '<pre>';
print_r($usuarios_app);
echo '</pre>';*/

foreach($usuarios_app as $user) {
    
    
    if($user['email']==$_POST['email']and $user['senha']==$_POST['senha']) {
        $usuario_autenticado=true;
    } 
}
if($usuario_autenticado) {
    echo 'Usuário autenticado';
} else {
    header ('Location: index.php?login=erro');//aqui eu defino uma matriz na array $_GET com o valor 'erro'.
}

/*echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];*/


?>