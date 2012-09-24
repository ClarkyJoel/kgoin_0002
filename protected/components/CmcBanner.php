<?php

class CmcBanner extends CWidget {
    
    public $cmcbanner;
    
    public function init() {
        $this->cmcbanner = '/images/homepage-banner.png';
    }
    
    public function run() {
        $this->render('cmcbanner', array('cmcbanner' => $this->cmcbanner));
    }
}