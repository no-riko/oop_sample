<?php

    require_once('curewhite.php');
    require_once('cureblack.php');

    $cureWhite = new CureWhite(800,500);
    $cureBlack = new Cureblack(800,500);

    echo 'キュアホワイトのHPは';
    echo $cureWhite->hp;
    echo '<br>';

    echo 'キュアホワイトのMPは';
    echo $cureWhite->mp;
    echo '<br>';

    echo 'キュアブラックのHPは';
    echo $cureBlack->hp;
    echo '<br>';

    echo 'キュアブラックのMPは';
    echo $cureBlack->mp;
    echo '<br>';

    $cureWhite->whiteThunder();
    $cureBlack->blackThunder();
    //if(cureWhite != null && cureBlack != null){
        echo 'プリキュア・マーブル・スクリュー!!';
        echo '<br>';
    //}

    $cureWhite->whitePulsar();
    $cureBlack->blackPulsar();
    //if(cureWhite != null && cureBlack != null){
        echo 'プリキュア・レインボー・セラピー!!';
        echo '<br>';
    //}
    echo '<br>';

?>