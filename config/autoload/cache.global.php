<?php

$caches = array('caches' => array());

if (extension_loaded('redis')) {
    /*
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
                'host' => '127.0.0.1',
                'port' => '6379',
            )
        ),
    );
    */
}

return $caches;
