<?php

class Support extends CWidget {
    
    public $support;
    
    public function init(){
        $this->support = '/images/hotro_icon.png';
    }
    
    public function run() {
        $this->render('support', array('support' => $this->support));
    }
}