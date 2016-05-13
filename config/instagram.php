<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'id' => '5bcb0257f77743348293fadbe9c586bc',
            'secret' => '87f4c38001ab4660bbdc97d4029794d5',
            'access_token' => '{ "access_token": "2955795164.5bcb025.167ab063428d42dba45c5c355006a044"}'
            //'access_token' => '943bc0559a724b10a0e7c1620de440e3',

            //code = 943bc0559a724b10a0e7c1620de440e3
        ],

        'alternative' => [
            'id' => 'your-client-id',
            'secret' => 'your-client-secret',
            'access_token' => null,
        ],

    ],

];
