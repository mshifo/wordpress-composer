<?php return array(
    'root' => array(
        'pretty_version' => '1.0.6',
        'version' => '1.0.6.0',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'wpscholar/wp-skeleton',
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress' => array(
            'pretty_version' => '6.1.1',
            'version' => '6.1.1.0',
            'type' => 'package',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress',
            'aliases' => array(),
            'reference' => 'd9ee7d6193781c9ee6288be6ca5681ee0c3f85b8',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core' => array(
            'pretty_version' => '6.1.1',
            'version' => '6.1.1.0',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../../wp',
            'aliases' => array(),
            'reference' => 'c9688597721b8579f3c29028e572a7b9753db893',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core-installer' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress-core-installer',
            'aliases' => array(),
            'reference' => '237faae9a60a4a2e1d45dce1a5836ffa616de63e',
            'dev_requirement' => false,
        ),
        'm1/env' => array(
            'pretty_version' => '2.2.0',
            'version' => '2.2.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../m1/env',
            'aliases' => array(),
            'reference' => '5c296e3e13450a207e12b343f3af1d7ab569f6f3',
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '6.1.1',
            ),
        ),
        'wpscholar/phpdotenv' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wpscholar/phpdotenv',
            'aliases' => array(),
            'reference' => '6506eea08382b8bd8156f4038ae4380f1c30f146',
            'dev_requirement' => false,
        ),
        'wpscholar/wp-skeleton' => array(
            'pretty_version' => '1.0.6',
            'version' => '1.0.6.0',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
