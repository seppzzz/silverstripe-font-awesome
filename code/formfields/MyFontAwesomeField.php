<?php


class MyFontAwesomeField extends FormField{
	
	protected $optionsList;
	
	public function __construct($name, $title = null, $options = array (), $value = null){
		
		parent::__construct($name, $title, $value);
		$this->optionsList = $options;
		return $this;
	}
	
	public function setOptions($opts){
		
		$this->optionsList = $opts;
		return $this;
	}
	
	public function getOptions(){
		
		$options = ArrayList::create();
		foreach($this->optionsList as $val => $label) {
			$options->push(ArrayData::create(array(
				'Label' => $label,
				'Value' => $val,
				'Selected' => $this->Value() == $val
			)));
		}
		
		return $options;		
	}
	
	
	public function Field($attributes = array ()){
		
		
		
		$this->addExtraClass('form-control icp icp-auto');

        //Libraries
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/bootstrap.min.css');
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome.min.css');
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome-iconpicker.min.css');
        Requirements::javascript(FONT_AWESOME_DIR . '/js/lib/font-awesome-iconpicker.min.js');

        // Module
        Requirements::css(FONT_AWESOME_DIR . '/css/font-awesome-module.css');
        Requirements::javascript(FONT_AWESOME_DIR . '/js/font-awesome-module.js');
		
		
		Requirements::css(FONT_AWESOME_DIR . '/css/style.css');

        Requirements::set_force_js_to_bottom(true);

		
		
		return $this->renderWith('MyFontAwesomeField');
		
	}
}
	
