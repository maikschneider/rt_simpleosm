<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "rt_simpleosm"
 *
 * Auto generated by Extension Builder 2019-03-01
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Simple OpenStreetMap',
    'description' => 'Insert a simple OpenStreetMap. No API key required!',
    'category' => 'plugin',
    'author' => 'Regis TEDONE',
    'author_email' => 'regis.tedone@gmail.com',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '4.1.2',
    'constraints' => [
        'depends' => [ 'typo3' => '8.7.32-11.5.99' ],
        'conflicts' => [],
        'suggests' => [
	        'tt_address' => '4.0.0-5.99.99',
        ],
    ],
];
