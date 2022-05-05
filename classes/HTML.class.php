<?php

class html{

    private $data;
    protected $surround = 'p';

    public function __construct($data = array()){
        $this -> data = $data;
    }

    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

//    private function getValue($i){
////        return isset($this -> data[$i]) ? $this -> data[$i] : null;
////    }

    public function style($href){
        return $this->surround('<link rel="stylesheet" href="'.$href.'">');
    }

    public function meta($name, $content){
        return $this->surround('    <meta name="' .$name . '" content="'
            .$content. '">');
    }

    public function img($src,$alt){
        return $this->surround('<img src="'.$src.'" alt="'.$alt.'">');
    }

    public function links($href,$txt){
        return $this->surround('<a href="'.$href.'">' . $txt .'</a>');
    }

    public function script($src){
        return $this->surround('<script type="text/javascript" src="'.$src.'"></script>');
    }
}