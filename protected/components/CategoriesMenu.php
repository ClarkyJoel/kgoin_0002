<?php
class CategoriesMenu extends CWidget {
    
    public $categories = array();
    
    public function init() {
        
    }
    
    public function run() {
        $this->render('categoriesmenu');
    }
}