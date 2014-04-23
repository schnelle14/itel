<?php
class ContactUsPage extends Page {
	static $db = array(
			'Landline_no' => 'Text',
			'Mobile_no'   => 'Text',
			'Fax_no'      => 'Text',
			'Postal_add'  => 'Text',
			'Team_email'  => 'Text'
	);
	
	static $has_many = array(
	);
	
	static $has_one = array (
	
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
			
		$fields->addFieldToTab('Root.Content.ContactInfo', new TextField('Landline_no', 'Landline number'));
		$fields->addFieldToTab('Root.Content.ContactInfo', new TextField('Mobile_no', 'Mobile number'));
		$fields->addFieldToTab('Root.Content.ContactInfo', new TextField('Fax_no', 'Fax number'));
		$fields->addFieldToTab('Root.Content.ContactInfo', new TextField('Postal_add', 'Postal Address'));
		$fields->addFieldToTab('Root.Content.ContactInfo', new TextField('Team_email', 'Email Address'));        
		return $fields;
	}
}
class ContactUsPage_Controller extends Page_Controller {
	
	public function landLineExists(){
		if ($this->Landline_no == null){
			return false;
		}
		return true;
	}
	public function mobileNoExists(){
		if ($this->Mobile_no == null){
			return false;
		}
		return true;
	}
	public function faxNoExists(){
		if ($this->Fax_no == null){
			return false;
		}
		return true;
	}
	public function postalAddExists(){
		if ($this->Postal_add == null){
			return false;
		}
		return true;
	}
	public function teamEmailExists(){
		if ($this->Team_email == null){
			return false;
		}
		return true;
	}
}