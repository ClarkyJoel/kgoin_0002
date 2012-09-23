<?php

class CmcBanner extends CWidget {
    
    public $bannersrc;
    
    public function init() {
        
    }
    
    public function run() {
        $this->render('cmcbanner');
    }
}