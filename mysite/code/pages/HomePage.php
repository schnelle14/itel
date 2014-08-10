<?php
class HomePage extends Page {
	static $db = array(
			'Header_Text' => 'Text',
			'Detail_Text' => 'Text',
			'Mobile' => 'Text',
			'Landline' => 'Text',
			'Email' => 'Text',
			'AboutUsText' => 'Text'
	);
	static $has_one = array(
	);
	public static $has_many = array(
			'ServicesOffered' => 'ServiceOffered'
	);
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		 
		$fields->addFieldToTab('Root.Content.Home', new TextField('Header_Text', 'Header Text'));
		$fields->addFieldToTab('Root.Content.Home', new TextAreaField('Detail_Text', 'Detail Text'));
		
		$fields->addFieldToTab('Root.Content.Contact', new TextField('Mobile', 'Mobile No.'));
		$fields->addFieldToTab('Root.Content.Contact', new TextField('Landline', 'Landline No.'));
		$fields->addFieldToTab('Root.Content.Contact', new TextField('Email', 'Email Address'));
		
		$fields->addFieldToTab('Root.Content.AboutUs', new TextAreaField('AboutUsText', 'About Us'));
		
		$gridFieldConfig = GridFieldConfig::create()->addComponents(
				new GridFieldToolbarHeader(),
				new GridFieldAddNewButton('toolbar-header-right'),
				new GridFieldSortableHeader(),
				new GridFieldDataColumns(),
				new GridFieldPaginator(10),
				new GridFieldEditButton(),
				new GridFieldDeleteAction(),
				new GridFieldDetailForm()
		);
		
		$gridField = new GridField("Services", "Services Offered:",$this->ServicesOffered(), $gridFieldConfig);
		$fields->addFieldToTab("Root.Content.Services", $gridField);
		
		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {
	// home page
}