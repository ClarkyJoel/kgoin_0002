<?php

class Slider extends CWidget {
    
    public $imgsrc = array();
    
    public function init() {
        
    }
    
    public function run() {
        $this->render('slider');
    }
}