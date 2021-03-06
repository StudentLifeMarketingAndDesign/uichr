<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Control\Email\Email;
use SilverStripe\ORM\DataExtension;


class SiteConfigExtension extends DataExtension {

	private static $db = array(
		'TwitterLink' => 'Text',
        'FacebookLink' => 'Text',
        'YoutubeLink' => 'Text',
		'Analytics' => 'Text',
		'Address1' => 'Text',
		'Address2' => 'Text',
		'City' => 'Text',
		'State' => 'Text',
		'Zip' => 'Text',
		'Phone' => 'Text',
		'Fax' => 'Text',
		'Email' => 'Text',
		'DonateLink' => 'Text',
	);

	private static $has_one = array(

	);

	public function updateCMSFields(FieldList $fields) {
		// $fields->addFieldToTab('Root.Main', new TextField('Analytics', 'Google Analytics Tracking ID'));
		$fields->addFieldToTab('Root.Main', new TextField('TwitterLink', 'Twitter Account URL'));
        $fields->addFieldToTab('Root.Main', new TextField('FacebookLink', 'Facebook Account URL'));
        $fields->addFieldToTab('Root.Main', new TextField('YoutubeLink', 'YouTube Account URL'));
		$fields->addFieldToTab('Root.Main', new TextField('Address1', 'Address 1'));
		$fields->addFieldToTab('Root.Main', new TextField('Address2', 'Address 2'));
		$fields->addFieldToTab('Root.Main', new TextField('City', 'City'));
		$fields->addFieldToTab('Root.Main', new TextField('State', 'State'));
		$fields->addFieldToTab('Root.Main', new TextField('Zip', 'Zip Code'));
		$fields->addFieldToTab('Root.Main', new TextField('Phone', 'Phone Number'));
		$fields->addFieldToTab('Root.Main', new TextField('Fax', 'Fax'));
		// $fields->addFieldToTab('Root.Main', new TextField(Email::class, Email::class));
		$fields->addFieldToTab('Root.Main', new TextField('DonateLink', 'Donation Link'));

		return $fields;

	}

}
class SiteConfigExtensionPage_Controller extends PageController {

	public function init() {
		parent::init();
	}

}