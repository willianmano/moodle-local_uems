<?php

defined('MOODLE_INTERNAL') || die();

$functions = [
    'local_uems_get_courses' => [
        'classname' => 'local_uems_courses',
        'methodname' => 'get_courses',
        'classpath' => 'local/uems/classes/local_uems_courses.php',
        'type' => 'read'
    ]
];

$services = [
    'WS Integração UEMS' => [
        'functions' => [
            'local_uems_get_courses'
        ],
        'restrictedusers' => 1,
        'enabled' => 1
    ]
];
