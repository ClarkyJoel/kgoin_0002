<?php

class Slider extends CWidget {
    
    public $slider = array();
    
    public function init() {
        
        $this->slider = array(
			array('path' => '/images/EndpointSecurity-Slide.png','caption' => ''),
			array('path' => '/images/CMC-Antivirus-Slide.png','caption' => ''),
			array('path' => '/images/internetSecurity-Slide.png','caption' => ''),
			array('path' => '/images/mobileSecurity-Slide.png','caption' => ''),
		);
    }
    
    public function run() {
        if(!count($this->slider)) return;
        $this->render('slider');
    }
}