<?php

    class Pikachu{

        public $hp;
        public $mp;

        public function __construct($hp, $mp){
            echo 'ピカチュウが生まれた';
            echo '<br>';

            $this->hp = $hp;
            $this->mp = $mp;
        }
    
        function thunderVolt(){
            echo 'サンダーボルトを発動した';
            echo '<br>';
        }

        function ironTail(){
            echo 'アイアンテールを発動した';
            echo '<br>';
        }

    }

?>