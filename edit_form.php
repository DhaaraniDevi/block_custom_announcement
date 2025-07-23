<?php
require_once($CFG->dirroot . '/blocks/edit_form.php');

class block_custom_announcement_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        $mform->addElement('header', 'configheader', get_string('pluginname', 'block_custom_announcement'));

        $mform->addElement('text', 'config_title', get_string('announcementtitle', 'block_custom_announcement'));
        $mform->setDefault('config_title', '');
        $mform->setType('config_title', PARAM_TEXT);

        $mform->addElement('textarea', 'config_text', get_string('announcementtext', 'block_custom_announcement'));
        $mform->setDefault('config_text', '');
        $mform->setType('config_text', PARAM_RAW);

        $mform->addElement('text', 'config_bgcolor', get_string('backgroundcolor', 'block_custom_announcement'));
        $mform->setDefault('config_bgcolor', '');
        $mform->setType('config_bgcolor', PARAM_RAW);
        
        $mform->addHelpButton('config_bgcolor', 'backgroundcolor', 'block_custom_announcement');

         $mform->addElement('text', 'config_textcolor', get_string('textcolor', 'block_custom_announcement'));
        $mform->setDefault('config_textcolor', '');
        $mform->setType('config_textcolor', PARAM_RAW);
        
        $mform->addHelpButton('config_textcolor', 'textcolor', 'block_custom_announcement');

    }
}
