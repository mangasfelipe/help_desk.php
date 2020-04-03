<?php

//usar a session_start(); ela deve ser usada antes de qualquer outra instrução no script. Deve ser usada antes de qualquer dado ser escrito na tela para o cliente;
session_start();

$usuario_login=false;
$usuarios_id=null;

$permissoes = [
     /*$contas=*/  ['id'=>1,'email' => 'admin@hot.com', 'senha'=> '1234'],
     /*$contas=*/  ['id'=>2,'email' => 'user@hot.com', 'senha'=> '1234'],
     /*$contas=*/  ['id'=>3,'email' => 'jose@hot.com', 'senha'=> '1234'],
     /*$contas=*/  ['id'=>4,'email' => 'mangas@hot.com', 'senha'=> '1234']                                                                                                                     ];




foreach ($permissoes as $contas) {
    if ($contas['email']==$_POST['email'] && $contas['senha']==$_POST['senha']) {
        $usuario_login=true;
        print_r($user);
    }    
}
    if($usuario_login) {
        echo 'Você acessou com o seu email: '.$_POST['email'];
        $_SESSION['autenticado']='SIM';
        header ('Location: home.php');
        
    } else { 
        $_SESSION['autenticado']='NÃO';
        header('Location: index.php?login=erro'); 
    }
    
    


    /*echo '<pre>';
    print_r($contas);
    echo '</pre>';
    echo '<hr>';
    
             

    echo '<pre>';
    print_r($permissoes);
    echo '</pre>';

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/






?>