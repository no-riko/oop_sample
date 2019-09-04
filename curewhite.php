<?php

    class CureWhite{

        public $hp;
        public $mp;

        public function __construct($hp, $mp){
            echo '雪城ほのかがキュアホワイトに変身した!';
            echo '<br>';

            $this->hp = $hp;
            $this->mp = $mp;
        }
    
        function whiteThunder(){
            echo 'ホワイトサンダー!';
            echo '<br>';
        }

        function whitePulsar(){
            echo 'ホワイトパルサー!';
            echo '<br>';
        }

    }

?>