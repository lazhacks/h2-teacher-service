<?php

return [
    'web_services' => [
        'services' => [
            'ClassroomWebService' => [
                'base_uri' => 'http://10.132.96.182',
                'timeout' => 2,
                'allow_redirects' => [
                    'max'             => 10,
                    'strict'          => true,
                    'referer'         => true,
                    'protocols'       => ['http'],
                    'track_redirects' => true
                ],
            ],
            'StudentWebService' => [
                'base_uri' => 'http://10.132.204.164',
                'timeout' => 2,
                'allow_redirects' => [
                    'max'             => 10,
                    'strict'          => true,
                    'referer'         => true,
                    'protocols'       => ['http'],
                    'track_redirects' => true
                ],
            ],
        ],
    ],
];
