<?php

return [

    'listeners' => [
        'Sightseeing\Listeners\EmailNotifier',
        'Sightseeing\Listeners\PusherNotifier'
    ],

    's3-bucket' => 'sightseeing.io'

];