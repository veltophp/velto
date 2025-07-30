<?php

return [
    'github' => [
        'client_id'     => getenv('GITHUB_CLIENT_ID'),
        'client_secret' => getenv('GITHUB_CLIENT_SECRET'),
        'redirect'      => getenv('GITHUB_REDIRECT_URI'),
    ],

    'google' => [
        'client_id'     => getenv('GOOGLE_CLIENT_ID'),
        'client_secret' => getenv('GOOGLE_CLIENT_SECRET'),
        'redirect'      => getenv('GOOGLE_REDIRECT_URI'),
    ],

    'discord' => [
        'client_id'     => getenv('DISCORD_CLIENT_ID'),
        'client_secret' => getenv('DISCORD_CLIENT_SECRET'),
        'redirect'      => getenv('DISCORD_REDIRECT_URI'),
    ],

    'facebook' => [
        'client_id'     => getenv('FACEBOOK_CLIENT_ID'),
        'client_secret' => getenv('FACEBOOK_CLIENT_SECRET'),
        'redirect'      => getenv('FACEBOOK_REDIRECT_URI'),
    ],
];

