<?php
session_start();
/*echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//para criar um script de logoff podem ser:
//remover índices de arrays de sessao.;
unset(); //Tem a inteligência o suficiente para reconhecer caso o índice exista.

//destruir a variável de sessão. 
session_destroy();*/// a sessão será destruída.
//devemos forçar um redirecionamento.
session_destroy();
header('Location: index.php');





?>