<?php

    $file=fopen("abc.txt","w");
    $txt="Bidisha Paul\n";
    fwrite($file,$txt);
    fclose($file);
?>