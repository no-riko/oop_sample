<?php

    require_once('pikachu.php');
    require_once('laplace.php');

    //ピカチュウ1
    $pikachu1 = new Pikachu(100,50);

    echo 'ピカチュウのHPは';
    echo $pikachu1->hp;
    echo '<br>';

    echo 'ピカチュウのMPは';
    echo $pikachu1->mp;
    echo '<br>';

    $pikachu1->thunderVolt();
    $pikachu1->ironTail();
    echo '<br>';

    //ピカチュウ2
    $pikachu2 = new Pikachu(1000,500);

    echo 'ピカチュウのHPは';
    echo $pikachu2->hp;
    echo '<br>';

    echo 'ピカチュウのMPは';
    echo $pikachu2->mp;
    echo '<br>';

    $pikachu2->thunderVolt();
    $pikachu2->ironTail();
    echo '<br>';

    //ピカチュウ3
    $pikachu3 = new Pikachu(800,500);

    echo 'ピカチュウのHPは';
    echo $pikachu3->hp;
    echo '<br>';

    echo 'ピカチュウのMPは';
    echo $pikachu3->mp;
    echo '<br>';

    $pikachu3->thunderVolt();
    $pikachu3->ironTail();
    echo '<br>';


    //ラプラス1
    $laplace1 = new Laplace();

    $laplace1->hp = 300;
    $laplace1->mp = 100;

    echo 'ラプラスのHPは';
    echo $laplace1->hp;
    echo '<br>';

    echo 'ラプラスのMPは';
    echo $laplace1->mp;
    echo '<br>';

    $laplace1->waterGun();
    $laplace1->iceBreath();
    echo '<br>';

    echo '完さんは500のダメージを受けた';
?>