<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
			'Small_HeroImage' => 'Image'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
	
		
		$heroImage = new UploadField('Small_HeroImage', 'Upload page hero image here. (1100 x 230)');
		$heroImage->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
		$heroImage->setConfig('allowedMaxFileNumber', 1);
		$fields->addFieldToTab("Root.Content.Images", $heroImage);
			
		return $fields;
	}
}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}
	
	public function isHomePage(){
		if ($this->ClassName == "HomePage"){
// 					var_dump($this->ClassName);
			return true;
		}
		return false;
	}
	
	public function heroImageExists(){
		if ($this->Small_HeroImageID > 0){
			return true;
		}
		return false;
	}

}
