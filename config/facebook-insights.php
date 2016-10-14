<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | App ID
    |--------------------------------------------------------------------------
    |
    | Facebook App ID
    | https://developers.facebook.com/docs/graph-api/reference/application
    |
    */
    'app-id' => '1397673093593541',

    /*
    |--------------------------------------------------------------------------
    | App secret
    |--------------------------------------------------------------------------
    |
    | Your app secret
    |
    */
    'app-secret' => 'e9c93adfc6a8cb67206ddd7d094df5ba',

    /*
    |--------------------------------------------------------------------------
    | Page permanent access token
    |--------------------------------------------------------------------------
    |
    | Your page's permanent access token
    |
    | See here on how to obtain a permanent access token for your facebook page:
    | https://stackoverflow.com/questions/12168452/long-lasting-fb-access-token-for-server-to-pull-fb-page-info
    |
    */

    'access-token' => 'EAACEdEose0cBAHmoOoqkZAvHkVAhUCKGF6x0uacyZAx2JbIeFRqTORDB7eSCdOEpbqfpsUWJ4W3WSEVS6bMJVf49yQUo8rlZBozh0EraO0H0eBXbWA4DphYFC1SS1ZAE9Wgp4C2kfCZCZBZBiqL3gwqYSSgHYWKNIVWTMBoxZCC1YgZDZD',

    /*
    |--------------------------------------------------------------------------
    | Page ID
    |--------------------------------------------------------------------------
    |
    | Your page's Id
    |
    */

    'page-id' => '158605867529348',

    /*
    |--------------------------------------------------------------------------
    | API call limit per query
    |--------------------------------------------------------------------------
    |
    | The maximum number of API calls one query is allowed to make
    | This applies to queries made to get data from extended period of time. For example: if you make a query
    | with a date range of over 92 days, it will split the query in several API calls that each fetch a part of
    | the date range. (93 days is the date range limit on the Facebook Graph API)
    |
    */

    'api-call-max' => 15,

    /*
    |--------------------------------------------------------------------------
    | Cache lifetime
    |--------------------------------------------------------------------------
    |
    | The amount of time (in minutes) Graph API responses will be cached.
    | If you set this to zero, the responses won't be cached at all.
    |
    */

    'cache-lifetime' => 60 * 24,
);