<?php
class file implements iFile
{
    private $filetext;
    public function __construct($filePath){
        $this->filetext = $filePath;
    }
    public function getPath(){
        return $this->filetext;
    }
    public function getDir(){
        $path_parts = pathinfo($this->filetext);
        return $path_parts['dirname'];
    }
    public function getName(){
        $path_parts = pathinfo($this->filetext);
        return $path_parts['basename'];
    }
    public function getExt(){
        $path_parts = pathinfo($this->filetext);
        return $path_parts['extension'];
    }
    public function getSize(){
        return filesize($this->filetext);
    }
    public function getText(){
        return file_get_contents($this->filetext);
    }
    public function setText($text){
        file_put_contents($this->filetext, $text);
    }
    public function appendText($text){
        $current = file_get_contents($this->filetext);
        $current .= $text;
        file_put_contents($this->filetext, $current);
    }
    public function copy($copyPath){
        copy($this->filetext, $copyPath);
    }
    public function delete(){
        unlink($this->filetext);
    }
    public function rename($newName){
        rename($this->filetext, $newName);
    }
    public function replace($newPath){
        copy($this->filetext, $newPath);
        unlink($this->filetext);
        $this->filetext = $newPath;
    }
}