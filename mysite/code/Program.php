<?php

class Program extends DataObject {

  private static $db = array(
    'ProgramTitle' => 'Varchar(255)',
    'ProgramDescription' => 'Text',
    'SortOrder'=>'Int'
  );

  // One-to-one relationship with parent page
  private static $has_one = array(
    'AssociatedPage' => 'SiteTree',
    'ProgramPhoto' => 'Image',
    'HomePage' => 'HomePage'
  );

  // Summary fields
  private static $summary_fields = array(
    'ProgramTitle' => 'Title'
  );

  private static $default_sort='SortOrder';

  public function getCMSFields() {

    $thumbField = new UploadField('ProgramPhoto', 'Photo');

    return new FieldList(
      new TextField('ProgramTitle', 'Title'),
      new TextareaField('ProgramDescription', 'Description'),
      new TreeDropdownField('AssociatedPageID', 'Link to this page', 'SiteTree'),
      $thumbField
    );

  }
}