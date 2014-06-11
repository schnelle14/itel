<?php
class HomePage extends Page {
	static $db = array(
			'Header_Text' => 'Text',
			'Detail_Text' => 'Text',
			'Mobile' => 'Text',
			'Landline' => 'Text',
			'Email' => 'Text'
	);
	static $has_one = array(
	);
	 	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		 
		$fields->addFieldToTab('Root.Content.Home', new TextField('Header_Text', 'Header Text'));
		$fields->addFieldToTab('Root.Content.Home', new TextAreaField('Detail_Text', 'Detail Text'));
		
		$fields->addFieldToTab('Root.Content.Contact', new TextField('Mobile', 'Mobile No.'));
		$fields->addFieldToTab('Root.Content.Contact', new TextField('Landline', 'Landline No.'));
		$fields->addFieldToTab('Root.Content.Contact', new TextField('Email', 'Email Address'));
		
		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {

}