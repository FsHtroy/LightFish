<?php

return [



    'paths' => [
        realpath(base_path('/resources/views')),
    ],


    'compiled' => env('VIEW_CACHE_PATH',realpath(base_path('/storage/framework/views'))),

];

