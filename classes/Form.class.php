<?php

class Form{

    private $data;
    public $surround = 'p';
    protected $gender = array('man', 'woman', 'other');

    public function __construct($data = array()){
        $this -> data = $data;
    }

    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    private function getValue($i){
        return isset($this -> data[$i]) ? $this -> data[$i] : null;
    }

    public function input($name){
        return $this->surround('<input type="text" name="' . $name . '" Value="' . $this-> getValue($name) . '"> ');
    }

    public function textarea(){
        return $this->surround('<textarea name="textarea" row="4" cols="50"></textarea> ');
    }

    public function select($name){
        echo $this->surround('<select name="' . $name . '">
            <option value="">Select</option>');

        foreach ($this->gender AS $value){
            echo "<option value='$value'> $value </option>";
        }
        echo "</select>";
    }

    public function radio($name,$id1,$id2,$id3){
        return $this->surround( $name . '<div> <input type="radio" id="' .
            $id1 .
            '" name="' . $name . '" value="' . $id1 . '">' . $id1 . '<label for="' . $id1.'"></label> </div>
            <br> 
            <div> <input type="radio" id="' . $id2 . '" name="' . $name . '" value="' . $id2 . '">' . $id2 .' </div> 
            <br> 
            <div> <input type="radio" id="' . $id3 . '" name="' . $name . '" value="' . $id3 . '">'. $id3 .' </div>');
    }

    public function checkbox($name1,$name2){
        return $this->surround('<div><input type="checkbox" id="' . $name1 . '" name=" ' . $name1 . ' "><label for=" ' . $name1 . ' "><?php$id1?></label></div><div><input type="checkbox" id="' . $name2 . '" name="' . $name2 . '"><label for="' . $name2 . '"><?php $name2 ?></label></div>');
    }

    public function submit(){
        return $this->surround('<button type="submit"> Send </button>');
    }
}

