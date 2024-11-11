<?php
    class obsah {
        private $oblicej = 50**2*M_PI/4;
        private $oci = 11**2*M_PI/4;
        private $pusa = 20*5;

        public function obsah (){
            echo 'Obsah smajlíku je: ' . $this->oblicej - 2*$this->oci - $this->pusa . 'cm².';
        }
}