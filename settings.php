<?php
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext(
        'block_custom_announcement/announcementtitle',
        get_string('announcementtitle', 'block_custom_announcement'),
        '',
        'Important Announcement'
    ));

    $settings->add(new admin_setting_configtextarea(
        'block_custom_announcement/announcementtext',
        get_string('announcementtext', 'block_custom_announcement'),
        '',
        'Welcome to our Moodle site!'
    ));

    $settings->add(new admin_setting_configtext(
        'block_custom_announcement/backgroundcolor',
        get_string('backgroundcolor', 'block_custom_announcement'),
        '',
        '#f5f5f5'
    ));
    $settings->add(new admin_setting_configtext(
        'block_custom_announcement/textcolor',
        get_string('textcolor', 'block_custom_announcement'),
        '',
        '#000000'
    ));
}
