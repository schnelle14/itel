<?php
class HomePage extends Page {
	static $db = array(
			'Header_Left' => 'Text',
			'Text_Left' => 'Text',
			'Header_Right' => 'Text',
			'Text_Right' => 'Text'
	);
	static $has_one = array(
			'Home_HeroImage' => 'Image',
			'Logo_Image'     => 'Image',
			'SmallDefault_HeroImage' => 'Image'
	);
	 	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->removeByName('Small_HeroImage');
		 
		$fields->addFieldToTab('Root.Content.Main', new TextField('Header_Left', 'Left Header'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextAreaField('Text_Left', 'Left Text'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextField('Header_Right', 'Right Header'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextAreaField('Text_Right', 'Right Text'), 'Content');
		
		$homeHeroImage = new UploadField('Home_HeroImage', 'Please upload home page hero image'); 
		$homeHeroImage->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif')); 
		$homeHeroImage->setConfig('allowedMaxFileNumber', 1);
		$fields->addFieldToTab("Root.Content.Images", $homeHeroImage);
// 		$fields->addFieldToTab("Root.Content.Images", new ImageField('Logo_Image', 'Company Logo (200 x 100)'));
// 		$fields->addFieldToTab("Root.Content.Images", new ImageField('SmallDefault_HeroImage', 'Default Hero Image for other pages (1600 x 230)', null, null, null, 'HeroImages'));

		
		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {
	public function getLogo(){
		return $this->Logo_Image;
	}
}