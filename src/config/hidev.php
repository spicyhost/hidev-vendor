<?php

/*
 * SpicyHost vendor configuration for HiDev
 *
 * @link      https://github.com/spicyhost/hidev-vendor
 * @package   hidev-vendor
 * @license   No license
 * @copyright Copyright (c) 2014-2016, SpicyHost (https://spicyhost.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@spicyhost/hidev/vendor/config/goals.yml',
            ],
            'views' => [
                '@spicyhost/hidev/vendor/views',
            ],
        ],
    ],
];
