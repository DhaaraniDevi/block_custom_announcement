<?php 
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block to display custom announcement.
 *
 * @package    block_custom_announcement
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 defined('MOODLE_INTERNAL') || die();
 
 class block_custom_announcement extends block_base {
 
     public function init() {
         $this->title = get_string('pluginname', 'block_custom_announcement');
     }
 
     public function applicable_formats() {
         return array('site' => true, 'my' => true);
     }
 
     public function instance_allow_multiple() {
         return true;
     }
 
     public function has_config() {
         return true; // Site-wide settings enabled
     }
 
     public function get_content() {
         if ($this->content !== null) {
             return $this->content;
         }
 
         $siteconfig = get_config('block_custom_announcement');
 
         // Load site-wide defaults
         $title = !empty($siteconfig->announcementtitle) ? $siteconfig->announcementtitle : get_string('defaulttitle', 'block_custom_announcement');
         $text = !empty($siteconfig->announcementtext) ? $siteconfig->announcementtext : get_string('defaulttext', 'block_custom_announcement');
         $bgcolor = !empty($siteconfig->backgroundcolor) ? $siteconfig->backgroundcolor : '#f5f5f5';
        $textcolor = !empty($siteconfig->textcolor) ? $siteconfig->textcolor : '#f5f5f5';
 
         // Override with per-instance settings if available
         if (!empty($this->config)) {
             if (!empty($this->config->title)) {
                 $title = $this->config->title;
             }
             if (!empty($this->config->text)) {
                 $text = $this->config->text;
             }
             if (!empty($this->config->bgcolor)) {
                 $bgcolor = $this->config->bgcolor;
             }
              if (!empty($this->config->textcolor)) {
                 $textcolor = $this->config->textcolor;
             }
         }
 
         $this->content = new stdClass();
         $this->content->text = html_writer::div(
             html_writer::tag('h4', format_string($title)) .
             html_writer::div(format_text($text, FORMAT_HTML)),
             '',
             array('style' => "background-color: {$bgcolor}; color: {$textcolor}; padding: 10px; border-radius: 5px;")
         );
 
         $this->content->footer = '';
         return $this->content;
     }
 }
 