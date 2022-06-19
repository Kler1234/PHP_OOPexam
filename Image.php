<?php
require_once 'tag.php';

	class Image extends Tag{
		public function __construct(){
			$this->setAttr('src', '');
			$this->setAttr('alt', '');	
			parent::__construct('image');
		}
        public function __toString(){
			return parent::open();
		}

	}

?>
