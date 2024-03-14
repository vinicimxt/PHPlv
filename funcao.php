<?php

function msg($nome){
    echo "Bem vindo, ".$nome;
}

function verificarUsuario($usuario){
    if ($usuario == "admin"){
        contentAdmin();
        return 1;
    }else {
        contentUser();
        return 0;
    }
}
function contentAdmin(){
    include "menu_admin.php";
    include "content_admin.php";
}

function contentUser(){
    include "menu_user.php";
}


function somaValores($parm1, $parm2, $parm3){
    $total = $parm1+$parm2+$parm3;

    return $total;
}

//if($_POST['login']=="admin"){
 //   include "menu_admin.php";
//    include "content_admin.php";
//} else {
//    include "menu_user.php";
//}