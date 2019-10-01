<?php
function retornaHTML($conteudo){
    include_once('../view/header.php');
    include_once($conteudo);
    include_once('../view/footer.php');
}

function retornaJSON($conteudo){
    echo $conteudo;
}
?>