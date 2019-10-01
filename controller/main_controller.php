<?php
function retornaHTML($uri){
    include_once('../view/header.php');
    include_once($uri);
    include_once('../view/footer.php');
}

function retornaJSON($conteudo){
    echo $conteudo;
}
?>