<?php
    $nome = "Rafael";
    function teste(){
        global $nome;
        echo $nome . " teste1";
    }
    function teste2(){
        echo "<br/>";
        $nome = "João";
        echo $nome . " agora no teste2";
    }
    teste();
    teste2();
?>
