<?php
require_once 'tag.php';
	class ListItem extends Tag{
		public function __construct(){
			parent::__construct('li');
		}
	}
    class HtmlList extends Tag{
        private $items = []; 
		public function addItem(ListItem $li){
			$this->items[] = $li;
			return $this; 
		}

		public function show(){
			$result = $this->open(); // открывающий тег
            foreach ($this->items as $item) 
            {
                $result .= $item->show(); // shpw
            
		    $result .= $this->close();
		    return $result;
		}
        public function __toString(){
            return $this->show();
        }
	}
    class Ul extends HtmlList {
        public function __construct() 
        {
            parent::__construct('ul');
        }
    }
    class Ol extends HtmlList {
        public function __construct() 
        {
            parent::__construct('ol');
        }   
    }
?>