<?php

class FontAwesomeSiteConfig  extends DataExtension{

	
	
	
	public function updateCMSFields(FieldList $fields){
		
		//Libraries
			Requirements::css(FONT_AWESOME_DIR . '/css/lib/bootstrap.min.css');
			Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome.min.css');
			Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome-iconpicker.min.css');
			Requirements::javascript(FONT_AWESOME_DIR . '/js/lib/font-awesome-iconpicker.min.js');

        // Module
			Requirements::css(FONT_AWESOME_DIR . '/css/font-awesome-module.css');
			Requirements::javascript(FONT_AWESOME_DIR . '/js/font-awesome-module.js');

			Requirements::set_force_js_to_bottom(true);
		
	}
	
	
}