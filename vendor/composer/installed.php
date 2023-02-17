<?php return array(
    'root' => array(
        'name' => 'courier/email',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'courier/contracts' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '37f3a469229edbec35af03fbf0ccf1a8fdef4931',
            'type' => 'library',
            'install_path' => __DIR__ . '/../courier/contracts',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'courier/courier' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '0395afbdc984a5f974b7c557ec82561f1bc7fe65',
            'type' => 'library',
            'install_path' => __DIR__ . '/../courier/courier',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'courier/email' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'ramsey/collection' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ramsey/collection',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
