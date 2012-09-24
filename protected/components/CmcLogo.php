<?php
class Cmclogo extends CWidget {
    
    public $cmclogo;
        
    public function init() {
        $this->cmclogo = '/images/cmcinfosec-logo.png';
    }
        
    public function run() {
        $this->render('cmclogo', array('cmclogo' => $this->cmclogo));
    }
}