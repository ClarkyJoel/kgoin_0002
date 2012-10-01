<?php

class Sidebar extends CWidget {
    
    public $sidebar;
    
    public function init() {
        
    }
    
    public function run() {
        $this->render('sidebar');
    }
}