<?php
class Format{
    public function formaDate($date) {
        return date('F j, Y , g:i a', strtotime($date));
    }

    public function textShroten($text, $limit = 400){
       $text = $text. " ";
       $text = substr($text, 0, $limit);
       $text = $text."......";
       return $text;
    }
}