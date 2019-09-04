<?php

    class CureBlack{

        public $hp;
        public $mp;

        public function __construct($hp, $mp){
            echo '美墨なぎさがキュアブラックに変身した!';
            echo '<br>';

            $this->hp = $hp;
            $this->mp = $mp;
        }
    
        function blackThunder(){
            echo 'ブラックサンダー!';
            echo '<br>';
        }

        function blackPulsar(){
            echo 'ブラックパルサー!';
            echo '<br>';
        }

    }

?>