<?php


namespace App\Code;


use MyDataObject;
use Page;
use App\Code\Student;
use App\Code\Mentor;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\GridField\GridFieldDataColumns;

class Project extends Page
{
    private static $has_many = [
        'Students_s' => Student::class,
        'Students' => Student::class,
        'MyDataObject' => MyDataObject::class
    ];

    private static $many_many = [
        'Mentors' => Mentor::class
    ];

//    public function getCMSFields()
//    {
//        $fields = parent::getCMSFields(); // TODO: Change the autogenerated stub
//        $config = GridFieldConfig_RelationEditor::create();
//
//        $config->getComponentByType(GridFieldDataColumns::class)->setDisplayFields(array(
//            'Name' => 'Name',
//            'Project.Title' => 'Project'
//        ));
//
//        $studentsField= new GridField(
//            'Students',
//            'Student',
//            $this->Students(),
//            $config
//        );
//
//        $fields->addFieldToTab('Root.Students', $studentsField);
//
//        $mentorsField = new GridField(
//            'Mentors',
//            'Mentors',
//            $this->Mentors(),
//            GridFieldConfig_RelationEditor::create()
//        );
//
//        $fields->addFieldToTab('Root.Mentors', $mentorsField);
//
//        return $fields;
//    }
}
