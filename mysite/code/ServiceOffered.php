<?php
class ServiceOffered extends DataObject {

	static $db = array(
			'Header'		=> 'Text',
			'Detail'		=> 'Text'
	);

	static $has_one = array(
			'MyHomePage' => 'HomePage'
	);

	function getCMSFields_forPopup() {
		$fields = new FieldSet();

		$fields->push( new TextField( 'Header', 'Service Title' ) );
		$fields->push( new TextareaField( 'Detail', 'Service Description' ) );

		return $fields;
	}

}