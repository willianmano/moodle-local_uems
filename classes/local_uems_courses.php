<?php

require_once($CFG->libdir . "/externallib.php");

class local_uems_courses extends external_api {
    public static function get_courses_parameters() {
        return new \external_function_parameters([]);
    }

    public static function get_courses() {
        global $DB;

        $sql = 'SELECT id, shortname, fullname FROM {course} WHERE id > 1';

        $courses = $DB->get_records_sql($sql);

        return [
            'data' => json_encode($courses)
        ];
    }

    public static function get_courses_returns() {
        return new \external_single_structure([
            'data' => new \external_value(PARAM_TEXT, 'return data')
        ]);
    }
}