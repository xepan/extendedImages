<?php

class page_extendedImages_page_owner_main extends page_componentBase_page_owner_main {
	function initMainPage(){
		$this->add('H3')->set('Component Owner Main Page<small> NO Option At Backend</small>');
	}


	function page_config(){
		$this->add('H1')->set('Default Config Page');
	}
}