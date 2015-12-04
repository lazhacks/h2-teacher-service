<?php

$caches = array('caches' => array());

if (extension_loaded('redis')) {
    $caches['caches']['Redis'] = array(
        'adapter' => 'redis',
        'ttl'     => 60,
        'plugins' => array(
            'exception_handler' => array(
                'throw_exceptions' => true,
            ),
        ),
        'options' => array(
            'server' => array(
                'host' => '10.132.162.130',
                'port' => '6379',
            )
        ),
    );
}

return $caches;
