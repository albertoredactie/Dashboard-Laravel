<?php

return

    [
        /*
         * The siteId is used to retrieve and display Google Analytics statistics
         * in the admin-section.
         *
         * Should look like: ga:xxxxxxxx.
         */
        'siteId' => 'ga:23110012',

        /*
         * Set the client id
         *
         * Should look like:
         * xxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com
         */
        'clientId' => '110393076600000805274',

        /*
         * Set the service account name
         *
         * Should look like:
         * xxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx@developer.gserviceaccount.com
         */
        'serviceEmail' => 'dashboard@mercurial-smile-145313.iam.gserviceaccount.com',

        /*
         * You need to download a p12-certifciate from the Google API console
         * Be sure to store this file in a secure location.
         */
        'certificatePath' => storage_path('My_Project-d633daa85caf.p12'),

        /*
         * The amount of minutes the Google API responses will be cached.
         * If you set this to zero, the responses won't be cached at all.
         */
        'cacheLifetime' => 60 * 24 * 2,

        /*
         * The amount of seconds the Google API responses will be cached for
         * queries that use the real time query method. If you set this to zero,
         * the responses of real time queries won't be cached at all.
         */
        'realTimeCacheLifetimeInSeconds' => 5,
    ];
